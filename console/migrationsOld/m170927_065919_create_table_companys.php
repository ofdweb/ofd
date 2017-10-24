<?php

use yii\db\Migration;

class m170927_065919_create_table_companys extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%companys}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name_short' => $this->string(255)->notNull(),
            'name_full' => $this->string(255),
            'opf_id' => $this->integer(11)->unsigned()->notNull(),
            'inn' => $this->integer(11)->notNull(),
            'kpp' => $this->integer(11),
            'ogrn' => $this->string(32),
            'okpo' => $this->string(32),
            'okved' => $this->string(32),
            'account_id' => $this->integer(11)->unsigned()->notNull(),
            'created_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'created_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue('0'),
        ], $tableOptions);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%companys}}');
    }
}
