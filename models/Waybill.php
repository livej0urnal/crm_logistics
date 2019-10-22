<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "waybill".
 *
 * @property int $id
 * @property int $source_id
 * @property string $date
 * @property string $description
 * @property string $price
 */
class Waybill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'waybill';
    }

    public function getSources()
    {
        return $this->hasOne(Sources::className() , ['id' => 'source_id']);
    }



    public function getProducts()
    {
        return $this->hasMany(WaybillProducts::className() , ['waybill_id' => 'id']);
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source_id', 'date', 'price'], 'required'],
            [['source_id'], 'integer'],
            [['date'], 'safe'],
            [['description'], 'string'],
            [['price'], 'string', 'max' => 255],
        ];
    }



    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source_id' => 'Поставщик',
            'date' => 'Дата',
            'description' => 'Описание',
            'price' => 'Сумма',
        ];
    }
}
