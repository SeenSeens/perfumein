<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Admin".
 *
 * @property int $ID_Admin
 * @property string $Full_Name
 * @property string $Password
 * @property string $Role
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Full_Name'], 'string', 'max' => 200],
            [['Password'], 'string', 'max' => 100],
            [['Role'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Admin' => 'Id  Admin',
            'Full_Name' => 'Full  Name',
            'Password' => 'Password',
            'Role' => 'Role',
        ];
    }
}
