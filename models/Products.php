<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $cat_id
 * @property string $title
 * @property string $description
 * @property int $cost
 * @property string $unit
 * @property string $price
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'title', 'cost', 'unit', 'price'], 'required'],
            [['cat_id', 'cost'], 'integer'],
            [['description'], 'string'],
            [['title', 'unit', 'price'], 'string', 'max' => 255],
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className() , ['id' => 'cat_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Категория',
            'title' => 'Название',
            'description' => 'Примечание',
            'cost' => 'Кол-во(остаток)',
            'unit' => 'Единица',
            'price' => 'Цена',
        ];
    }
}
