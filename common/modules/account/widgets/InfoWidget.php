<?php
namespace account\widgets;

use Yii;
use yii\base\Widget;
use common\helpers\Html;
use common\models\User;
use account\modules\project\models\Project;

class InfoWidget extends Widget
{
    public $items = [];
    
    public $options = ['class' => 'col-md-2 col-sm-2 box0'];

    public function init()
    {
        parent::init();
        
        $this->items = [
            'user' => [User::find()->account()->active()->count(), 'Пользователей на сайте', ['class'=> 'col-md-2 col-sm-2 col-md-offset-1 box0']],
            'stack' => [Project::find()->account()->active()->count(), 'Активных проектов', []],
            'vallet' => [Yii::$app->formatter->asCurrency(0), 'Текущий баланс', []],
            'calendar' => [0, 'Ближайших задач', []],
            'data' => [Yii::$app->formatter->asPercent(0), 'Нагрзка на сервер', []]
        ];
    }
    
    public function run()
    {
        return $this->renderItems();
    }
    
    public function renderItems()
    {
        $result = [];
        
        foreach ($this->items as $key => $el) {
            $result[] = $this->renderItem($key, $el);
        }
        
        return implode('', $result);
    }
    
    public function renderItem($icon, $item)
    {
        $data = [
            Html::tag('div', Html::icon_li($icon) . Html::tag('h3', $item[0]), ['class' => 'box1']),
            Html::tag('p', $item[1])
        ];
        
        $options = array_merge($this->options, $item[2]);
        
        return Html::tag('div', implode('', $data), $options);
    }
}