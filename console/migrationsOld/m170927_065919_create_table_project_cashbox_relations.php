<?php

use yii\db\Migration;

class m170927_065919_create_table_project_cashbox_relations extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%project_cashbox_relations}}', [
            'project_id' => $this->integer(11)->unsigned()->notNull(),
            'cashbox_id' => $this->integer(11)->unsigned()->notNull(),
        ], $tableOptions);

        $this->addPrimaryKey('primary_key', '{{%project_cashbox_relations}}', ['project_id','cashbox_id']);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%project_cashbox_relations}}');
    }
}
