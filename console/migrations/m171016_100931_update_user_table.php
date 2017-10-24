<?php

use yii\db\Migration;

class m171016_100931_update_user_table extends Migration
{
    public function safeUp()
    {
        $this->createIndex('accounts_updated_by', '{{%accounts}}', 'updated_by', true);
        $this->createIndex('accounts_created_by', '{{%accounts}}', 'created_by', true);
        $this->createIndex('target_logs_created_by', '{{%target_logs}}', 'created_by', true);
      
        $this->addForeignKey('ac_us_cr', '{{%accounts}}', 'updated_by', '{{%users}}', 'id');
        $this->addForeignKey('ac_us_up', '{{%accounts}}', 'created_by', '{{%users}}', 'id');
        $this->addForeignKey('logs_key', '{{%target_logs}}', 'created_by', '{{%users}}', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('ac_us_cr', '{{%accounts}}');
        $this->dropForeignKey('ac_us_up', '{{%accounts}}');
        $this->dropForeignKey('logs_key', '{{%target_logs}}');
      
        $this->dropIndex('accounts_updated_by', '{{%accounts}}');
        $this->dropIndex('accounts_created_by', '{{%accounts}}');
        $this->dropIndex('target_logs_created_by', '{{%target_logs}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171016_100931_update_user_table cannot be reverted.\n";

        return false;
    }
    */
}
