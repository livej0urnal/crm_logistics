<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sources".
 *
 * @property int $id
 * @property int $cat_id
 * @property string $title
 * @property string $description
 */
class Sources extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sources';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'title'], 'required'],
            [['cat_id'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
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
        ];
    }
}
