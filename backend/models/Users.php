<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property int $ID_Users
 * @property string $Full_Name
 * @property string $Email
 * @property int $Phone_number
 * @property string $Address
 * @property string $Password
 * @property string $Date_of_registration
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Phone_number'], 'integer'],
            [['Full_Name', 'Address'], 'string', 'max' => 200],
            [['Email', 'Password'], 'string', 'max' => 100],
            [['Date_of_registration'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Users' => 'Id  Users',
            'Full_Name' => 'Full  Name',
            'Email' => 'Email',
            'Phone_number' => 'Phone Number',
            'Address' => 'Address',
            'Password' => 'Password',
            'Date_of_registration' => 'Date Of Registration',
        ];
    }
}
