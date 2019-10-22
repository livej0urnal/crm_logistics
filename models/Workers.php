<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property int $id
 * @property string $fio
 * @property string $position
 * @property string $rate
 * @property string $work_day
 */
class Workers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'position', 'rate', 'work_day'], 'required'],
            [['fio', 'position', 'rate', 'work_day'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Фамилия Имя Отчество',
            'position' => 'Должность',
            'rate' => 'Ставка',
            'work_day' => 'Рабочие дни',
        ];
    }
}
