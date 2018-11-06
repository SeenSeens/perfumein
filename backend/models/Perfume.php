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
            [['Image',], 'required'],
            [['ID_Category', 'ID_Type_of_perfume', 'Views'], 'integer'],
            [['Price'], 'number'],
            [['Content'], 'string'],
            [['Perfume_Name'], 'string'],
            [['Summary'], 'string'],
            [['Discounts'], 'string', 'max' => 20],
            [['Image'], 'string'],
            //['Image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Perfume' => 'Mã nước hoa',
            'Perfume_Name' => 'Tên nước hoa',
            'ID_Category' => 'Danh mục',
            'ID_Type_of_perfume' => 'Loại nước hoa',
            'Price' => 'Giá bán',
            'Summary' => 'Mô tả',
            'Content' => 'Nội dung',
            'Discounts' => 'Giảm giá',
            'Image' => 'Hình ảnh',
            'Views' => 'Lượt xem',
        ];
    }
}
