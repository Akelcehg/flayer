<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "users".
 *
 * @property \MongoId|string $_id
 * @property mixed $username
 * @property mixed $passwrod
 * @property mixed $phone
 * @property mixed $email
 */
class Users extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['flayer', 'users'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'username',
            'passwrod',
            'phone',
            'email',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'passwrod', 'phone', 'email'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'username' => 'Username',
            'passwrod' => 'Passwrod',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
