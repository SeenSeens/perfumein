<?php

use yii\db\Migration;

/**
 * Class m181101_080530_Admin
 */
class m181101_080530_Admin extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Admin}}', [
            'ID_Admin' => $this->primaryKey(),
            'Full_Name' => $this->string(200)->notNull(),
            'Password' => $this->string(100)->notNull(),
            'Role' => $this->string(20),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Admin}}');
    }
}
