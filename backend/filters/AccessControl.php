<?php

namespace backend\filters;

use Yii;

class AccessControl extends \yii\filters\AccessControl
{
    public function init()
    {
        $this->except = ['site/error'];
        
        $this->rules = [       
            [
                'allow' => true,
                'matchCallback' => function ($rule, $action) {
                    if (Yii::$app->getUser()->isGuest) {
                        return false;
                    }
                    
                    if (!Yii::$app->getUser()->identity->account->statusIsActive()) {
                        if ($action->controller->id == 'site' && $action->controller->action->id == 'index') {
                            return true;
                        }
                        
                        return false;
                    }
                    
                    return true;
                }
            ]   
        ];
        
        $this->denyCallback = function ($rule, $action) {
            return Yii::$app->getUser()->isGuest ? Yii::$app->response->redirect('/login') : Yii::$app->response->redirect(['/site/index']);
        };
        
        parent::init();
    }
 }