<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "other_costs".
 *
 * @property int $id
 * @property string $data
 * @property string $description
 * @property string $money
 */
class OtherCosts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'other_costs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'description', 'money'], 'required'],
            [['data'], 'safe'],
            [['description'], 'string'],
            [['money'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Дата',
            'description' => 'Описание',
            'money' => 'Списание',
        ];
    }
}
