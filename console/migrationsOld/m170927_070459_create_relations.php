<?php

use yii\db\Migration;

class m170927_070459_create_relations extends Migration
{
    public function safeUp()
    {
        

        $this->addForeignKey('acc_userup', '{{%accounts}}', 'updated_by', '{{%user}}', 'id');
        $this->addForeignKey('acc_usercr', '{{%accounts}}', 'created_by', '{{%user}}', 'id');
      
        $this->addForeignKey('cashboxes_operator_ofd_id', '{{%cashboxes}}', 'operator_ofd_id', '{{%ofd_operators}}', 'id');
        $this->addForeignKey('cashboxes_company_id', '{{%cashboxes}}', 'company_id', '{{%companys}}', 'id');
        $this->addForeignKey('cashboxes_cr_user', '{{%cashboxes}}', 'created_by', '{{%user}}', 'id');
        $this->addForeignKey('cashboxes_up_user', '{{%cashboxes}}', 'updated_by', '{{%user}}', 'id');
        $this->addForeignKey('operator_model_kkt_id', '{{%cashboxes}}', 'model_kkt_id', '{{%cashbox_models}}', 'id');
      
        $this->addForeignKey('company_update_by', '{{%company_addresses}}', 'updated_by', '{{%user}}', 'id');
        $this->addForeignKey('company_addresses_id_key', '{{%company_addresses}}', 'company_id', '{{%companys}}', 'id');
        $this->addForeignKey('company_create_by', '{{%company_addresses}}', 'created_by', '{{%user}}', 'id');
      
        $this->addForeignKey('logs_key', '{{%target_logs}}', 'created_by', '{{%user}}', 'id');
      
        $this->addForeignKey('ofd_operators_key_opf_id', '{{%ofd_operators}}', 'opf_code', '{{%opf}}', 'id');
      
        $this->addForeignKey('project_cashbox_relations_key_projects', '{{%project_cashbox_relations}}', 'project_id', '{{%projects}}', 'id');
        $this->addForeignKey('project_cashbox_relations_key_cashpox', '{{%project_cashbox_relations}}', 'cashbox_id', '{{%cashboxes}}', 'id');
      
        $this->addForeignKey('project_key_company', '{{%projects}}', 'company_id', '{{%companys}}', 'id');
        $this->addForeignKey('project_key_create', '{{%projects}}', 'created_by', '{{%user}}', 'id');
        $this->addForeignKey('project_key_update', '{{%projects}}', 'updated_by', '{{%user}}', 'id');
      
        $this->addForeignKey('server_cashboxes_cashbox_key', '{{%server_cashboxes}}', 'cashbox_id', '{{%cashboxes}}', 'id');
        $this->addForeignKey('server_cashboxes_server_key', '{{%server_cashboxes}}', 'server_id', '{{%servers}}', 'id');
      
        $this->addForeignKey('user_key_account', '{{%user}}', 'account_id', '{{%accounts}}', 'id');
      
        $this->addForeignKey('companys_opf_id', '{{%companys}}', 'opf_id', '{{%opf}}', 'id');
        $this->addForeignKey('companys_account_id', '{{%companys}}', 'account_id', '{{%accounts}}', 'id');
        $this->addForeignKey('companys_create', '{{%companys}}', 'created_by', '{{%user}}', 'id');
        $this->addForeignKey('companys_updater', '{{%companys}}', 'updated_by', '{{%user}}', 'id');
    }

    public function safeDown()
    {
        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170927_070459_create_relations cannot be reverted.\n";

        return false;
    }
    */
}
