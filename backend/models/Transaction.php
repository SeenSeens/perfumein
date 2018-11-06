<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Transaction".
 *
 * @property int $ID_Transaction
 * @property string $Status
 * @property int $ID_Users
 * @property string $Full_Name
 * @property string $Email
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Users'], 'integer'],
            [['Status'], 'string', 'max' => 20],
            [['Full_Name', 'Email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Transaction' => 'Mã giao dịch',
            'Status' => 'Trạng thái',
            'ID_Users' => 'Mã người dùng',
            'Full_Name' => 'Họ tên',
            'Email' => 'Thư điện tử',
        ];
    }
}
