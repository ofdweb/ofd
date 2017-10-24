<?php

use yii\db\Migration;

class m170927_065919_create_table_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%target_logs}}', [
            'id' => $this->bigInteger(20)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'message' => $this->string(255)->comment('Событие'),
            'model_class' => $this->string(128)->comment('Модель'),
            'model_id' => $this->integer(11)->comment('Модель'),
            'category' => $this->string(255)->defaultValue('info')->comment('Категория'),
            'created_by' => $this->integer(11)->unsigned()->defaultValue('0')->comment('Автор'),
            'created_at' => $this->integer(11)->unsigned()->defaultValue('0')->comment('Дата'),
        ], $tableOptions);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%target_logs}}');
    }
}
