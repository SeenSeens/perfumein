<?php

use yii\db\Migration;

/**
 * Class m181101_083944_Transaction
 */
class m181101_083944_Transaction extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Transaction}}', [
            'ID_Transaction' =>$this->primaryKey(),
            'Status' =>$this->string(20),
            'ID_Users' =>$this->integer(11),
            'Full_Name' =>$this->string(200),
            'Email' =>$this->string(200),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Transaction}}');
    }
}
