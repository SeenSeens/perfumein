<?php

use yii\db\Migration;

/**
 * Class m181101_085710_Users
 */
class m181101_085710_Users extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Users}}', [
            'ID_Users' =>$this->primaryKey(),
            'Full_Name' =>$this->string(200),
            'Email' =>$this->string(100),
            'Phone_number' =>$this->integer(11),
            'Address' =>$this->string(200),
            'Password' =>$this->string(100),
            'Date_of_registration' =>$this->string(20),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Users}}');
    }
}
