<?php
namespace account\widgets;

use common\helpers\Html;
use common\models\User;

class UsersWidget extends BlockWidget
{
    public $label = 'Пользователи';
    
    public function init()
    {
        parent::init();
        $this->items = User::find()->account()->active()->all();
    }

    public function renderItem($item)
    {
        $data = [
            Html::tag('div', Html::icon('user', ['tag' => 'h4']), ['class' => 'thumb']),
            Html::tag('div', Html::a($item->userName, ['#']) . Html::tag('p', $item->email), ['class' => 'details'])
        ];
        
        return Html::tag('div', implode('', $data), $this->options);
    }
}