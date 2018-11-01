<?php

use yii\db\Migration;

/**
 * Class m181101_081357_Category
 */
class m181101_081357_Category extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%Category}}', [
            'ID_Category' => $this->primaryKey(),
            'Category_name' => $this->string(200)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Category}}');
    }
}
