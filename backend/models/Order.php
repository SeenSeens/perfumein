<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Order".
 *
 * @property int $ID_Order
 * @property int $ID_Perfumes
 * @property string $Data
 * @property int $Quantity
 * @property double $Total_Money
 * @property int $ID_Users
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Perfumes', 'Quantity', 'ID_Users'], 'integer'],
            [['Total_Money'], 'number'],
            [['Data'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Order' => 'Id  Order',
            'ID_Perfumes' => 'Id  Perfumes',
            'Data' => 'Data',
            'Quantity' => 'Quantity',
            'Total_Money' => 'Total  Money',
            'ID_Users' => 'Id  Users',
        ];
    }
}
