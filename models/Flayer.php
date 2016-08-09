<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "flayer".
 *
 * @property \MongoId|string $_id
 * @property mixed $image
 * @property mixed $name
 * @property mixed $type
 * @property mixed $discount
 * @property mixed $description
 * @property mixed $category
 * @property mixed $data_end
 */
class Flayer extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['flayer', 'flayer'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'image',
            'name',
            'type',
            'category',
            'description',
            'discount',
            'data_end',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'name', 'type', 'category', 'description', 'discount', 'data_end'], 'safe'],
            [['image', 'name', 'type', 'category', 'discount'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'image' => 'Image',
            'name' => 'Name',
            'type' => 'Type',
            'discount' => 'Discount',
            'description' => 'Description',
            'data_end' => 'Data End',
        ];
    }
}
