<?php
namespace themes\dashboard\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    // The files are not web directory accessible, therefore we need 
    // to specify the sourcePath property. Notice the @vendor alias used.
    public $sourcePath = '@themes/dashboard/fonts';
 
    public $css = [
        'font-awesome/css/font-awesome.css',
    ];
}