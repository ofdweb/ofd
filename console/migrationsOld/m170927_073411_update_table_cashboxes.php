<?php

use yii\db\Migration;

class m170927_073411_update_table_cashboxes extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%cashboxes}}', 'action_date_operator_at', $this->integer(11)->unsigned()->defaultValue('0')->comment('Дата действия оператора ОФД'));
        $this->addColumn('{{%cashboxes}}', 'type_fiscal_drive_id', $this->integer(11)->unsigned()->defaultValue('0')->comment('Тип фискального накопителя'));
        $this->addColumn('{{%cashboxes}}', 'fiscalization_at', $this->integer(11)->unsigned()->defaultValue('0')->comment('Дата фискализации'));
    }

    public function safeDown()
    {
        echo "m170927_073411_update_table_cashboxes cannot be reverted.\n";
        return false;
    }
}
