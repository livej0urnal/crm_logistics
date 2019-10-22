<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prize".
 *
 * @property int $id
 * @property int $worker_id
 * @property string $money
 * @property string $description
 * @property string $date
 */
class Prize extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prize';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worker_id', 'money', 'description', 'date'], 'required'],
            [['worker_id'], 'integer'],
            [['date'], 'safe'],
            [['money', 'description'], 'string', 'max' => 255],
        ];
    }

    public function getWorker()
    {
        return $this->hasOne(Workers::className() , ['id' => 'worker_id']);
    }



    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Сотрудник',
            'money' => 'Премия',
            'description' => 'Описание',
            'date' => 'Дата',
        ];
    }
}
