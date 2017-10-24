<?php
namespace themes\dashboard\assets;

use yii\web\AssetBundle;

class LineiconsAsset extends AssetBundle
{
    // The files are not web directory accessible, therefore we need 
    // to specify the sourcePath property. Notice the @vendor alias used.
    public $sourcePath = '@themes/dashboard/fonts';
 
    public $css = [
        'lineicons/style.css',
    ];
}