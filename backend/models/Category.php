<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Category".
 *
 * @property int $ID_Category
 * @property string $Category_name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Category_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Category' => 'Mã danh mục',
            'Category_name' => 'Tên danh mục',
        ];
    }

    // Lấy ra tên danh mục
    public function getNameCategory()
    {
        $data = Category::find()
            ->asArray()
            ->all();
        return $data;
    }
}
