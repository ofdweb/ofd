<?php

use yii\db\Migration;

class m170927_065919_create_table_cashbox_models extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cashbox_models}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'model' => $this->string(32)->notNull()->comment('Модель'),
            'serial' => $this->string(32)->notNull()->comment('Серийный номер'),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue('0'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cashbox_models}}');
    }
}
