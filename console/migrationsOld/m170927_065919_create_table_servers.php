<?php

use yii\db\Migration;

class m170927_065919_create_table_servers extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%servers}}', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'ip' => $this->string(32)->notNull()->comment('IP'),
            'port' => $this->integer(11)->unsigned()->notNull()->comment('Порт'),
            'version' => $this->string(8)->notNull()->comment('Версия'),
            'reserve_ip' => $this->string(32)->notNull()->comment('Резервный IP'),
            'reserve_port' => $this->integer(11)->unsigned()->notNull()->comment('Резервный порт'),
            'place_id' => $this->integer(11)->unsigned()->comment('Место установки'),
            'last_access_at' => $this->integer(11)->unsigned()->defaultValue('0')->comment('Время последнего доступа'),
            'updated_at' => $this->integer(11)->unsigned()->defaultValue('0')->comment('Обновлено'),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue('0'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%servers}}');
    }
}
