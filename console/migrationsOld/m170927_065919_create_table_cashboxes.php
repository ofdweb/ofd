<?php

use yii\db\Migration;

class m170927_065919_create_table_cashboxes extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cashboxes}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'installed' => $this->string()->comment('Место установки'),
            'address' => $this->string(255)->comment('Адрес'),
            'place_id' => $this->integer(11)->unsigned()->comment('Место'),
            'model_kkt_id' => $this->integer(11)->unsigned()->comment('Модель ККТ'),
            'operator_ofd_id' => $this->integer(11)->unsigned()->comment('Оператор ОФД'),
            'number_kkt' => $this->string(32)->comment('Заводской номер ККТ'),
            'number_fiscal_drive' => $this->string(32)->comment('Номер фискального накопителя'),
            'ph_id' => $this->string(32)->comment('Номер ККТ в ФНС'),
            'company_id' => $this->integer(11)->unsigned()->notNull()->comment('Компания'),
            'created_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'created_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue('0'),
        ], $tableOptions);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%cashboxes}}');
    }
}
