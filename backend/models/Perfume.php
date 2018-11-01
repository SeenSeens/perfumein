<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Perfume".
 *
 * @property int $ID_Perfume
 * @property int $ID_Category
 * @property int $ID_Type_of_perfume
 * @property string $Perfume_Name
 * @property double $Price
 * @property string $Summary
 * @property string $Content
 * @property string $Discounts
 * @property string $Image_Link
 * @property int $Views
 */
class Perfume extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Perfume';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Category', 'ID_Type_of_perfume', 'Views'], 'integer'],
            [['Price'], 'number'],
            [['Content'], 'string'],
            [['Perfume_Name'], 'string', 'max' => 200],
            [['Summary'], 'string', 'max' => 150],
            [['Discounts'], 'string', 'max' => 20],
            [['Image_Link'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Perfume' => 'Id  Perfume',
            'ID_Category' => 'Id  Category',
            'ID_Type_of_perfume' => 'Id  Type Of Perfume',
            'Perfume_Name' => 'Perfume  Name',
            'Price' => 'Price',
            'Summary' => 'Summary',
            'Content' => 'Content',
            'Discounts' => 'Discounts',
            'Image_Link' => 'Image  Link',
            'Views' => 'Views',
        ];
    }
}
