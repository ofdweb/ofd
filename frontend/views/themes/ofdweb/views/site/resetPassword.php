<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Восстановить пароль');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <div class="row">
        <div class="col-lg-5 center-block">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false) ?>

                <br />
                <div class="form-group text-center">
                    <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'orange-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
