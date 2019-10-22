<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $cost
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'cost'], 'required'],
            [['order_id', 'product_id', 'cost'], 'integer'],
        ];
    }

    public function getOrder()
    {
        return $this->hasOne(Order::className() , ['id' => 'order_id']);
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className() , ['product_id' => 'id']);
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'cost' => 'Cost',
        ];
    }
}
