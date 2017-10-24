<?php

use yii\db\Migration;

class m170927_071741_insert_opf_data extends Migration
{
    public function safeUp()
    {
      $this->insert('opf', [
            'code' => 12300,
            'full' => 'Общества с ограниченной ответственностью',
            'short' => 'ООО'
        ]);
        
        $this->insert('opf', [
            'code' => 12247,
            'full' => 'Открытое акционерное общество',
            'short' => 'ОАО'
        ]);
        
        $this->insert('opf', [
            'code' => 12267,
            'full' => 'Закрытое акционерное общество',
            'short' => 'ЗАО'
        ]);
        
        $this->insert('opf', [
            'code' => 12200,
            'full' => 'Акционерное общество',
            'short' => 'АО'
        ]);
        
        $this->insert('opf', [
            'code' => 50102,
            'full' => 'Индивидуальный предприниматель',
            'short' => 'ИП'
        ]);
        
        $this->insert('opf', [
            'code' => 12247,
            'full' => 'Публичное акционерное общество',
            'short' => 'ПАО'
        ]);
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
        echo "m170927_071741_insert_opf_data cannot be reverted.\n";

        return false;
    }
    */
}
