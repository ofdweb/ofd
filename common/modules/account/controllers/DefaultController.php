<?php

namespace common\modules\account\controllers;

use yii\web\Controller;

/**
 * Default controller for the `account` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    { 

        $job = new \common\jobs\SignupAccount(['account_id' => \Yii::$app->user->identity->account_id]);
        $job->encrypt();
      //  \Yii::$app->queueApi->push($job); 
      
        return $this->render('index');
    }
}
