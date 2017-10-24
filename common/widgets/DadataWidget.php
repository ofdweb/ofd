<?php
namespace common\widgets;

class DadataWidget extends \corpsepk\DaData\SuggestionsWidget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!$this->token) {
            $this->token = \Yii::$app->params['dadata']['token'];
        }
        parent::init();
    } 
}