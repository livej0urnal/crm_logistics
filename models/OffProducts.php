<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "off_products".
 *
 * @property int $id
 * @property int $product_id
 * @property string $price
 * @property string $cost
 */
class OffProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'off_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'price', 'cost'], 'required'],
            [['product_id'], 'integer'],
            [['price', 'cost'], 'string', 'max' => 255],
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(Products::className() , ['id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'cost' => 'Cost',
        ];
    }
}
