<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "write_off".
 *
 * @property int $id
 * @property string $date
 * @property string $reason
 * @property string $price
 */
class WriteOff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'write_off';
    }

    public function getProducts()
    {
        return $this->hasMany(OffProducts::className() , ['off_id' => 'id']);
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'reason', 'price'], 'required'],
            [['date'], 'safe'],
            [['reason'], 'string'],
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
            'date' => 'Дата',
            'reason' => 'Причина',
            'price' => 'Сумма',
        ];
    }
}
