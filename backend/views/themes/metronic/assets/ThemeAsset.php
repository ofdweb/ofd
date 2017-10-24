<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace themes\metronic\assets;

use Yii;
use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@themes/metronic';
  
    public $css = [
        'css/vendor.css',
        'css/default.css',
        'css/fonts.css'
    ];
  
    public $js = [
        'js/webfont.js',
        'js/vendor.js',
        'js/scripts.js',
        'js/dashboard.js',
    ];
  
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        //'frontend\themes\ofdweb\assets\ThemeAsset'
    ];
}