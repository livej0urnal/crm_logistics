<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "waybill_products".
 *
 * @property int $id
 * @property int $waybill_id
 * @property int $product_id
 * @property string $cost
 * @property string $price
 */
class WaybillProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'waybill_products';
    }
    public function getTovar()
    {
        return $this->hasOne(Products::className() , ['id' => 'product_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['waybill_id', 'product_id', 'cost', 'price'], 'required'],
            [['waybill_id', 'product_id'], 'integer'],
            [['cost', 'price'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'waybill_id' => 'Waybill ID',
            'product_id' => 'Product ID',
            'cost' => 'Cost',
            'price' => 'Price',
        ];
    }
}
