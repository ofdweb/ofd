<?php

use yii\db\Migration;

class m170927_065919_create_table_server_cashboxes extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%server_cashboxes}}', [
            'server_id' => $this->integer(11)->unsigned()->notNull()->comment('Сервер'),
            'cashbox_id' => $this->integer(11)->unsigned()->notNull()->comment('Касса'),
            'last_access_at' => $this->integer(11)->unsigned()->defaultValue('0')->comment('Последний доступ'),
            'port' => $this->smallInteger(8)->unsigned()->notNull(),
        ], $tableOptions);

        $this->addPrimaryKey('primary_key', '{{%server_cashboxes}}', ['server_id','cashbox_id']);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%server_cashboxes}}');
    }
}
