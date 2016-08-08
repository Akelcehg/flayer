<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for collection "user".
 *
 * @property \MongoId|string $_id
 * @property mixed $email
 * @property mixed $password
 * @property mixed $status
 * @property mixed $STATUS_ACTIVE
 */
class User extends \yii\mongodb\ActiveRecord implements IdentityInterface
{
    public $password;
    const STATUS_ACTIVE = 1;

    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['flayer', 'user'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'email',
            'password',
            'password_hash',
            'auth_key',
            'status'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password'], 'safe'],
            ['status', 'default', 'value' => self::STATUS_ACTIVE]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        /*var_dump(static::findOne(['_id' => $id, 'status' => self::STATUS_ACTIVE]));
        Yii::$app->end();*/
        return static::findOne(['_id' => $id, 'status' => self::STATUS_ACTIVE]);

    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        //throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        return static::findOne(['auth_key' => $token]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public static function findByEmail($email)
    {
        return static::find()->where(['email' => $email, 'status' => self::STATUS_ACTIVE])->one();
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int)end($parts);
        return $timestamp + $expire >= time();
    }

    public static function is($role)
    {
        //Get role by name
        return array_key_exists($role, Yii::$app->authManager->getRolesByUser(Yii::$app->user->id));
    }
}
