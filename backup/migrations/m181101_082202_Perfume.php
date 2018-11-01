<?php

use yii\db\Migration;

/**
 * Class m181101_082202_Perfume
 */
class m181101_082202_Perfume extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%Perfume}}', [
            'ID_Perfume' => $this->primaryKey(),
            'ID_Category' =>$this->integer(11),
            'ID_Type_of_perfume' =>$this->integer(11),
            'Perfume_Name' =>$this->string(200),
            'Price' =>$this->double(),
            'Summary' =>$this->string(150),
            'Content' =>$this->text(),
            'Discounts' =>$this->string(20),
            'Image_Link' =>$this->string(100),
            'Views' =>$this->integer(11),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%Perfume}}');
    }
}
