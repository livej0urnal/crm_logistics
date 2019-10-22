<?php

namespace app\models;

use Codeception\Module\Cli;
use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $date
 * @property int $worker_id
 * @property int $client_id
 * @property string $payment
 * @property string $price
 * @property string $comment
 * @property string $status
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['worker_id', 'client_id', 'price'], 'required'],
            [['worker_id', 'client_id'], 'integer'],
            [['payment', 'status'], 'string'],
            [['price', 'comment'], 'string', 'max' => 255],
        ];
    }
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className() , ['order_id' =>'id']);
    }

    public function getWorker()
    {
        return $this->hasOne(Workers::className() , ['id' => 'worker_id']);
    }

    public function getClient()
    {
        return $this->hasOne(Clients::className() , ['id' => 'client_id']);
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'worker_id' => 'Работник',
            'client_id' => 'Клиент',
            'payment' => 'Способ оплаты',
            'price' => 'Сумма',
            'comment' => 'Комментарий',
            'status' => 'Статус',
        ];
    }
}
