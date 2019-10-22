<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property int $id
 * @property string $date
 * @property int $cat_id
 * @property int $worker_id
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventory';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className() , ['id' => 'cat_id']);
    }

    public function getProducts()
    {
        return $this->hasMany(InvenProducts::className() , ['inven_id' => 'id']);
    }

    public function getWorker()
    {
        return $this->hasOne(Workers::className() , ['id' => 'worker_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'cat_id', 'worker_id'], 'required'],
            [['date'], 'safe'],
            [['cat_id', 'worker_id'], 'integer'],
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
            'cat_id' => 'Категория',
            'worker_id' => 'Работник',
        ];
    }
}
