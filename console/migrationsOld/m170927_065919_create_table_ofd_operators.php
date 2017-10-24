<?php

use yii\db\Migration;

class m170927_065919_create_table_ofd_operators extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ofd_operators}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(255)->notNull()->comment('Наименование'),
            'opf_code' => $this->integer(11)->unsigned()->notNull()->comment('Код ОПФ'),
            'inn' => $this->bigInteger(20)->unsigned()->notNull()->comment('ИНН'),
            'url' => $this->string(32)->notNull()->comment('Адрес сайта'),
            'is_deleted' => $this->smallInteger(1)->defaultValue('0'),
        ], $tableOptions);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%ofd_operators}}');
    }
}
