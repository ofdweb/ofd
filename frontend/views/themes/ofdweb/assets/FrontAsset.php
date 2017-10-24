<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\views\themes\ofdweb\assets;

use Yii;
use yii\web\AssetBundle;
use yii\web\View;

class FrontAsset extends AssetBundle
{
    public $css = [
        'css/front.css'
    ];
  
    public $js = [
      
    ];
  
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'frontend\views\themes\ofdweb\assets\ThemeAsset',
    ];

    public function init()
    {
        parent::init();
      
        if (isset(Yii::$app->view->theme->basePath)) {
            $this->sourcePath = Yii::$app->view->theme->basePath;
        }
    }
}