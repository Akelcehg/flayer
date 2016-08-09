<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "flayer_groups".
 *
 * @property \MongoId|string $_id
 * @property mixed $name
 */
class FlayerGroup extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['flayer', 'flayer_groups'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'name',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'name' => 'Name',
        ];
    }
}
