<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inven_products".
 *
 * @property int $id
 * @property int $product_id
 * @property string $cost
 */
class InvenProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inven_products';
    }

    public function getProduct()
    {
        return $this->hasOne(Products::className() , ['id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'cost'], 'required'],
            [['product_id'], 'integer'],
            [['cost'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'cost' => 'Cost',
        ];
    }
}
