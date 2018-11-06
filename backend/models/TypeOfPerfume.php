<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Type_of_perfume".
 *
 * @property int $ID_Type_of_perfume
 * @property string $Name_of_perfume
 * @property int $ID_Category
 */
class TypeOfPerfume extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Type_of_perfume';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Category'], 'integer'],
            [['Name_of_perfume'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Type_of_perfume' => 'Id  Type Of Perfume',
            'Name_of_perfume' => 'Name Of Perfume',
            'ID_Category' => 'Id  Category',
        ];
    }

    // Lấy ra tên loại nước hoa
    public function getTypeOfPerfume()
    {
        $data = TypeOfPerfume::find()
            ->asArray()
            ->all();
        return $data;
    }
}
