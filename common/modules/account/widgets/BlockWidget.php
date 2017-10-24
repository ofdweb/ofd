<?php
namespace account\widgets;

use Yii;
use yii\base\Widget;
use common\helpers\Html;

abstract class BlockWidget extends Widget
{
    public $items = [];
    
    public $options = ['class' => 'desc'];
    public $itemContentOptions = ['class' => 'project-wrap'];

    public function run()
    {
        return Html::tag('h3', Yii::t('app', $this->label), ['class' => 'text-uppercase']) . $this->renderItems();
    }
    
    public function renderItems()
    {
        $result = [];
        
        foreach ($this->items as $el) {
            $result[] = $this->renderItem($el);
        }
        
        return implode('', $result);
    }
  
    public function renderEmptyText()
    {
        return Yii::t('app', 'Ничего не найдено');
    }
}