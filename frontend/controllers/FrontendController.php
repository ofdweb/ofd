<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

abstract class FrontendController extends Controller
{
    public function goAccount()
    {
        return Yii::$app->getResponse()->redirect(Yii::$app->getUser()->getReturnUrl(['/account']));
    }
}