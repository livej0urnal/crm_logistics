<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salary".
 *
 * @property int $id
 * @property int $worker_id
 * @property int $rate_id
 * @property string $start_date
 * @property string $end_date
 * @property int $prize_id
 * @property string $money
 * @property string $name
 */
class Salary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id', 'rate_id', 'start_date', 'end_date', 'money', 'name' , 'fine_id'], 'required'],
            [['worker_id', 'rate_id', 'prize_id' , 'fine_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['money', 'name'], 'string', 'max' => 255],
        ];
    }

    public function getWorker()
    {
        return $this->hasOne(Workers::className() , ['id' => 'worker_id']);
    }

    public function getPrize()
    {
        return $this->hasOne(Prize::className() , ['id' => 'prize_id']);
    }

    public function getFine()
    {
        return $this->hasOne(Fines::className() , ['id' => 'fine_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Работник',
            'rate_id' => 'Ставка',
            'start_date' => 'Начало периода',
            'end_date' => 'Конец периода',
            'prize_id' => 'Премия',
            'fine_id' => 'Штраф',
            'money' => 'Зарплата',
            'name' => 'Название',
        ];
    }
}
