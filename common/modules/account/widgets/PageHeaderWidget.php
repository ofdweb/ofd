<?php
namespace account\widgets;

use Yii;
use common\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;

abstract class PageHeaderWidget extends \yii\widgets\Pjax
{
    public $model;
    
    //private $_options;
    /**
     * @inheritdoc
     */
    public $timeout = 10000;
    
    public static $autoIdPrefix = 'pjax-header__';
    
    public $options = [];
    
    public $linkSelector = false;
    
    public $formSelector = false;
    
    public $enablePushState = true;
    
    public $enableReplaceState = false;
    
    public $clientOptions = [];
    
    private $_id;
    
    public $block_id = 'test';
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        //$this->initOptions();
        
        parent::init();
    }
    
    public function getId($autoGenerate = true)
    {
        if ($autoGenerate && $this->_id === null) {
            $this->_id = static::$autoIdPrefix . $this->block_id;
        }

        return $this->_id;
    }
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->renderContent();
        parent::run();
    }
    
    public function renderContent()
    {
        return Html::tag(
            'div',
            'ddddd'
        );
    }

    public function render($view, $params = [])
    {
        if (Yii::$app->request->isAjax) {
            return $this->getView()->renderAjax($view, $params, $this);
        }

        return parent::render($view, $params);
    }

}