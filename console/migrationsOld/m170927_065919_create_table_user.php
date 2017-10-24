<?php

use yii\db\Migration;

class m170927_065919_create_table_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'username' => $this->string(255)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'password_reset_token' => $this->string(255),
            'email' => $this->string(255)->notNull(),
            'status' => $this->smallInteger(6)->unsigned()->notNull()->defaultValue('10'),
            'created_at' => $this->integer(11)->unsigned()->notNull(),
            'updated_at' => $this->integer(11)->unsigned()->notNull(),
            'account_id' => $this->integer(11)->unsigned(),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue('0'),
        ], $tableOptions);

        $this->createIndex('username', '{{%user}}', 'username', true);
        $this->createIndex('email', '{{%user}}', 'email', true);
        $this->createIndex('password_reset_token', '{{%user}}', 'password_reset_token', true);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
