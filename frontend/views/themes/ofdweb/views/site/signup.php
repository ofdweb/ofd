<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Регистрация');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="row">
        <div class="col-lg-6 center-block">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <?= $this->render('signupForm', compact('model')) ?>
            <div class="form-group text-center">
                    <hr />
                    <span><?= Yii::t('app', 'Есть аккаунт?') ?></span> <?= Html::a(Yii::t('app', 'Войти'), ['/login']) ?>
            </div>
        </div>
    </div>
</div>
