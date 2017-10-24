<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Вход');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
        <div class="col-lg-5 center-block">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <?= $this->render('loginForm', compact('model')) ?>
        </div>
    </div>
</div>
