<?php

namespace common\modules\account;

use Yii;
use yii\filters\AccessControl;
use common\helpers\Html;
/**
 * account module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'common\modules\account\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
  
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                      [
                        'allow' => true,
                        'roles' => ['@'],
                      ]
                ],
            ],
        ];
    }
    
    public function itemMenu()
    {
        return [
              [
                'label' => Yii::t('app', '{icon} Панель', ['icon' => Html::icon_li('user')]),
                'url' => ['/account']
              ],
              [
                'label' => Yii::t('app', '{icon} Проекты ', ['icon' => Html::icon_li('stack')]),
                'url' => ['/account/project'],
              ],
              [
                'label' => Yii::t('app', '{icon} Операции', ['icon' => Html::icon('log-out')]),
                'url' => ['/site/logout'],
              ],
              [
                'label' => Yii::t('app', '{icon} API', ['icon' => Html::icon('log-out')]),
                'url' => ['/site/logout'],
              ],
              [
                'label' => Yii::t('app', '{icon} Поддержка', ['icon' => Html::icon('log-out')]),
                'url' => ['/site/logout'],
              ]
        ];
    }
}
