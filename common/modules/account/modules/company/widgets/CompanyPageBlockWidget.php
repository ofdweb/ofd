<?php
namespace account\modules\company\widgets;

use Yii;

class CompanyPageBlockWidget extends \account\widgets\PageBlockWidget
{
    public $title = 'Компания';
    public $block_id = 'company';
    public $targetUrl = '/account/company/default';
    
    public $errorText = 'Ошибка выбора контрагента';
    
    public $enablePushState = false;
    
    public function settingItems()
    {
        return [
            [
                'label' => 'Сменить компанию', 
                'url' => $this->generateTargetUrl('change'), 
                'linkOptions' => ['data-setting-link' => true]
            ],
            [
                'label' => 'Отсоединить', 
                'url' => $this->generateModelUrl('detach'),
                'linkOptions' => ['data-setting-detach' => true],
                'visible' => $this->visibleLink()
            ],
        ];
    }
}