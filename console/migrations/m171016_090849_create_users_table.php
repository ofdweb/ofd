<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m171016_090849_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->integer(11)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
           // 'username' => $this->string(32)->notNull()->comment('Логин'),
            'email' => $this->string(255)->notNull(),
            //'ip' => $this->string(32)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'status' => $this->smallInteger(6)->unsigned()->notNull()->defaultValue(10)->comment('Статус'),
            'account_id' => $this->integer(11)->unsigned()->comment('Аккаунт'),
            'created_at' => $this->integer(11)->unsigned()->notNull(),
            'updated_at' => $this->integer(11)->unsigned()->notNull(),
            'is_deleted' => $this->smallInteger(1)->unsigned()->defaultValue(0),
        ]);
      
        $this->createIndex('email', '{{%users}}', 'email', true);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropIndex('email', '{{%users}}');
        $this->dropTable('users');
    }
}
