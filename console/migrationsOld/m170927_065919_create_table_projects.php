<?php

use yii\db\Migration;

class m170927_065919_create_table_projects extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%projects}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'company_id' => $this->integer(11)->unsigned()->notNull()->comment('Компания'),
            'name' => $this->string(128)->comment('Проект'),
            'url' => $this->string(128)->notNull()->comment('Url'),
            'created_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'created_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue('0'),
        ], $tableOptions);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%projects}}');
    }
}
