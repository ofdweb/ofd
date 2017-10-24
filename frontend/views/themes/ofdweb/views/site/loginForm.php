<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

        <?php $form = ActiveForm::begin(['action' => ['/site/login'], 'id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['placeholder' => $model->getAttributeLabel('username')])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false) ?>
                
                <div class="row login-form__remember">
                  <div class="pull-left">
                    <?php // $form->field($model, 'rememberMe', ['template' => "{input}{label}{error}"])->checkbox([], false) ?>
                  </div>
                  <div class="pull-right text-right">
                    <?= Html::a(Yii::t('app', 'Забыли пароль?'), ['site/request-password-reset']) ?>
                  </div>
                </div>

                <div class="form-group text-center">
                    <?= Html::submitButton(Yii::t('app', 'Войти'), ['class' => 'orange-button', 'name' => 'login-button']) ?>
                    <hr />
                    <span><?= Yii::t('app', 'Нет аккаунта?') ?></span> <?= Html::a(Yii::t('app', 'Регистрация'), ['/signup']) ?>
                </div>
        <?php ActiveForm::end(); ?>
