<?php
namespace common\modules\logger\widgets;

use common\helpers\Html;
use common\modules\logger\models\Log;

class EventsWidget extends \account\widgets\BlockWidget
{
    public $label = 'События';
    
    public function init()
    {
        parent::init();
        $this->items = Log::find()->byParams(['category' => Log::CATEGORY_EVENT])->account()->joinWith('author')->limit(5)->all();
    }

    public function renderItem($item)
    {
        $data = [
            Html::tag('div', Html::icon($item->iconClass, ['tag' => 'h4']), ['class' => 'thumb']),
            Html::tag('div',
                Html::tag('muted', \Yii::$app->formatter->asRelativeTime($item->created_at)) . 
                Html::tag('p', Html::a($item->author->userName, ['#']) . ' ' . $item->message), ['class' => 'details']
            )
        ];
        
        return Html::tag('div', implode('', $data), $this->options);
    }
}