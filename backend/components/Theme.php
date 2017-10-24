<?php

namespace backend\components;

use Yii;
use yii\helpers\Html;

/**
 *
 * @inheritdoc
 */
class Theme extends \yii\base\Theme
{
    /**
     * Theme folder name
     *
     * @var string
     */
    public $theme;
  
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
      
        Yii::setAlias('theme', '/backend/themes/' . $this->theme);                

        $this->basePath = '@backend/views/themes/' . $this->theme;
        $this->baseUrl = '@web/views/themes/' . $this->theme;
      
        $this->pathMap = [
            '@backend/views' => '@app/views/themes/' . $this->theme . '/views',
        ];
    }
  
    public function userMenu()
    {

        return [];
    }
}