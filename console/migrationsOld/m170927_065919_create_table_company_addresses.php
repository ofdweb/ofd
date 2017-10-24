<?php

use yii\db\Migration;

class m170927_065919_create_table_company_addresses extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%company_addresses}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'company_id' => $this->integer(11)->unsigned()->comment('Компания'),
            'postal_code' => $this->integer(11)->unsigned()->comment('Индекс'),
            'country' => $this->string(128)->comment('Страна'),
            'region' => $this->string(128)->comment('Регион'),
            'area' => $this->string(128)->comment('Район'),
            'city' => $this->string(128)->comment('Город'),
            'street' => $this->string(128)->comment('Улица'),
            'city_district' => $this->string(128)->comment('Район города'),
            'house' => $this->string(8)->comment('Дом'),
            'block' => $this->string(8)->comment('Корпус'),
            'flat' => $this->string(8)->comment('Квартира'),
            'geo_lat' => $this->float()->comment('Координаты'),
            'geo_lon' => $this->float()->comment('Координаты'),
            'created_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_by' => $this->integer(11)->unsigned()->defaultValue('0'),
            'created_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'updated_at' => $this->integer(11)->unsigned()->defaultValue('0'),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue('0'),
        ], $tableOptions);

        
    }

    public function safeDown()
    {
        $this->dropTable('{{%company_addresses}}');
    }
}
