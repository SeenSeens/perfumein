<?php

use yii\db\Migration;

/**
 * Class m181101_084814_Type_of_perfume
 */
class m181101_084814_Type_of_perfume extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Type_of_perfume}}', [
            'ID_Type_of_perfume' =>$this->primaryKey(),
            'Name_of_perfume' =>$this->string(200),
            'ID_Genre' =>$this->integer(11),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Type_of_perfume}}');
    }
}
