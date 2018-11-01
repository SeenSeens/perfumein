<?php

use yii\db\Migration;

/**
 * Class m181101_081622_Order
 */
class m181101_081622_Order extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Order}}', [
            'ID_Order' => $this->primaryKey(),
            'ID_Perfumes' => $this->integer(11),
            'Data' => $this->string(200),
            'Quantity' => $this->string(200),
            'Total_Money' => $this->double(),
            'ID_Users' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Order}}');
    }
}
