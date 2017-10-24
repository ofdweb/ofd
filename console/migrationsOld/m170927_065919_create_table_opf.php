<?php

use yii\db\Migration;

class m170927_065919_create_table_opf extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%opf}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'code' => $this->integer(11)->unsigned()->comment('Код'),
            'short' => $this->string(32)->comment('Краткое название ОПФ'),
            'full' => $this->string(128)->comment('Полное название ОПФ'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%opf}}');
    }
}
