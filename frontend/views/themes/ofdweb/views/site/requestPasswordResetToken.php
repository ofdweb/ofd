<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Сбросить пароль');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <div class="row">
        <div class="col-lg-5 center-block">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email')])->label(false) ?>
                <br />
                <div class="form-group text-center">
                    <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'orange-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
