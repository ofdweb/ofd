<?php

use yii\db\Migration;

class m170927_065919_create_table_accounts extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%accounts}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'access_token_api' => $this->string(128)->defaultValue(null),
            'created_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'created_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'is_deleted' => $this->smallInteger(1)->defaultValue('0'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%accounts}}');
    }
}
