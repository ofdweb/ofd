<?php

namespace frontend\components;

use Yii;
use yii\helpers\Html;
use \kartik\popover\PopoverX;

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

    public function init()
    {
        parent::init();
      
        Yii::setAlias('theme', '/frontend/themes/' . $this->theme);                

        $this->basePath = '@app/views/themes/' . $this->theme;
        $this->baseUrl = '@web/views/themes/' . $this->theme;
      
        $this->pathMap = [
            '@frontend/views' => '@app/views/themes/' . $this->theme . '/views',
        ];
    }
  
    public function itemMenu()
    {
      return array_merge([
        [
          'label' => Yii::t('app', 'Тарифы'),
          'url' => ['#']
        ],
        [
           'label' => Yii::t('app', 'Демо'),
           'url' => ['#']
        ],
        [
           'label' => Yii::t('app', 'Разработчикам'),
           'url' => ['#']
        ],
        [
            'label' => Yii::t('app', 'Вопросы и ответы'),
            'url' => ['#']
        ],
        [
            'label' => Yii::t('app', 'Как подключить'),
            'url' => ['#']
        ],
        
      ], []);
    }
  
    public function userMenu()
    {
        $result[] = Html::tag('li', PopoverX::widget([
            'header' => false,
            'placement' => PopoverX::ALIGN_BOTTOM_RIGHT,
            //'size' => Yii::$app->user->isGuest ? PopoverX::SIZE_LARGE : PopoverX::SIZE_MEDIUM,
            'content' => Yii::$app->user->isGuest ? \common\models\LoginForm::renderForm() : \common\models\LoginForm::renderUserMenu(),
            'options' => (Yii::$app->user->isGuest ? ['class' => 'login-popover popover-md-lg'] : ['class' => 'login-popover user-menu-popover popover-md-md']),
            'toggleButton' => [
                'label' => Yii::$app->user->isGuest ? Yii::t('app', 'Войти') : Yii::$app->user->identity->userName,
                'tag' => 'a',
             ],
          ]));
      
        return $result;
    }
}