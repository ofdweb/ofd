<?php

use yii\db\Migration;

class m170927_072005_insert_ofd_operators_data extends Migration
{
    public function safeUp()
    {
      $this->insert('ofd_operators', [
            'opf_code' => 4,
            'name' => 'Энергетические системы и коммуникации',
            'inn' => 7709364346,
            'url' => 'www.1-ofd.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Такском',
            'inn' => 7704211201,
            'url' => 'www.taxcom.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Эвотор ОФД',
            'inn' => 9715260691,
            'url' => 'www.platformaofd.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Ярус',
            'inn' => 7728699517,
            'url' => 'www.ofd-ya.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'ПЕТЕР-СЕРВИС Спецтехнологии',
            'inn' => 7841465198,
            'url' => 'www.peterofd.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Яндекс.ОФД',
            'inn' => 7704358518,
            'url' => 'ofd.yandex.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Электронный экспресс',
            'inn' => 7729633131,
            'url' => 'garantexpress.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 3,
            'name' => 'КАЛУГА АСТРАЛ',
            'inn' => 4029017981,
            'url' => 'ofd.astralnalog.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Компания «Тензор»',
            'inn' => 7605016030,
            'url' => 'sbis.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'КОРУС Консалтинг СНГ',
            'inn' => 7801392271,
            'url' => 'esphere.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Производственная фирма «СКБ Контур»',
            'inn' => 6663003127,
            'url' => 'https://kontur.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 4,
            'name' => 'Тандер',
            'inn' => 2310031475,
            'url' => 'magnit.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'Удостоверяющий центр «ИнитПро»',
            'inn' => 5902034504,
            'url' => 'ofd-initpro.ru'
        ]);
      
        $this->insert('ofd_operators', [
            'opf_code' => 1,
            'name' => 'ГРУППА ЭЛЕМЕНТ',
            'inn' => 7729642175,
            'url' => 'e-ofd.ru'
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
        echo "m170927_072005_insert_ofd_operators_data cannot be reverted.\n";

        return false;
    }
    */
}
