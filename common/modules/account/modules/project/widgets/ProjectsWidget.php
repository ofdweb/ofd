<?php
namespace account\modules\project\widgets;

use Yii;
use yii\base\Widget;
use common\helpers\Html;
use account\modules\project\models\Project;

class ProjectsWidget extends Widget
{
    private $items = [];
    public $label = 'Настройки проектов';
    
    public $options = ['class' => 'row'];
    public $itemOptions = ['class' => 'col-lg-4'];
    public $itemEmptyOptions = ['class' => 'col-lg-12'];
    public $itemContentOptions = ['class' => 'white-panel pn'];
    
    public $viewOptions = ['class' => 'btn btn-info text-uppercase'];
    public $viewNewOptions = ['class' => 'h1 create'];
    public $itemNewContentOptions = ['class' => 'white-panel v-center pn'];
  
    public $addNewItem = true;
    public $viewText = 'Настроить';
    public $viewNewText = 'Добавить проект';
    
    public function init()
    {
        parent::init();
      
    }

    public function run()
    {
        $this->items = Project::find()->active()->account()->all();

        return ($this->label ? Html::tag('h4', Yii::t('app', $this->label), ['class' => 'text-uppercase']) : null) . Html::tag('div', $this->renderItems(), $this->options);
    }
    
    private function renderItems()
    {
        $result = [];
      
        if ($this->addNewItem) {
            $result[] = Html::tag('div', $this->renderNewItem(), $this->itemOptions);
        }
        
        foreach ($this->items as $el) {
            $result[] = Html::tag('div', $this->renderItem($el), $this->itemOptions);
        }
      
        if (!$result) {
            $result[] = Html::tag('div', $this->renderEmptyText(), $this->itemEmptyOptions);
        }
        
        return implode('', $result);
    }
  
    private function renderEmptyText()
    {
        return Html::tag('div', Yii::t('app', 'Ничего не найдено'), ['class' => 'alert alert-info']);
    }
  
    private function renderNewItem()
    {
        $data = [
            Html::tag('div', 
                Html::a(Html::icon('plus'), ['create'], $this->viewNewOptions) . 
                Html::tag('h4', $this->viewNewText)
            )
        ];
        
        return Html::tag('div', implode('', $data), $this->itemNewContentOptions);
    }
    
    private function renderItem($item)
    {
        $data = [
            Html::tag('div', Html::tag('h5', $item->url), ['class' => 'orange-header']),
            Html::tag('h1', Html::icon_li('stack')),
            Html::tag('h3', $item->nameItem, ['class' => 'text-success']),
            '<br/>',
            Html::a(Yii::t('app', $this->viewText), $item->url, $this->viewOptions)
        ];
        
        return Html::tag('div', implode('', $data), $this->itemContentOptions);
    }
}