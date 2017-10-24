<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace themes\dashboard\assets;

use Yii;
use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@themes/dashboard';
  
    public $css = [
        'css/style.css',
        'css/style-responsive.css'
    ];
  
    public $js = [
      
    ];
  
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'themes\dashboard\assets\FontAwesomeAsset',
        'themes\dashboard\assets\LineiconsAsset',
        //'frontend\themes\ofdweb\assets\ThemeAsset'
    ];
}