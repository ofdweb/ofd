<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\DadataWidget;
use yii\web\JsExpression;
?>
        <?php $form = ActiveForm::begin(['action' => ['/site/signup'], 'id' => 'form-signup']); ?>

                <?php // $form->field($model, 'username')->textInput(['placeholder' => $model->getAttributeLabel('username')])->label(false) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email')])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false) ?>

                <?= $form->field($model, 'company_search')->widget(DadataWidget::classname(), [
                    'type' => DadataWidget::TYPE_PARTY,
                    'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('company_search'),
                    ],
                    'options' => [
                      'onSelect' => new JsExpression("function(suggestion, changed) {
                            $('#signupform-inn').val(suggestion.data.inn);
                      }"),
                    ]
                ])->label(false) ?>

                <?= $form->field($model, 'inn')->hiddenInput()->label(false) ?>

                <?= $form->field($model, 'url')->textInput(['placeholder' => $model->getAttributeLabel('url')])->label(false) ?>

                <?php // $form->field($model, 'code')->textInput(['placeholder' => $model->getAttributeLabel('code')])->label(false) ?>

                <?= $form->field($model, 'rules', ['template' => "{input}{label}{error}"])->checkbox(['required' => false], false)->label(Yii::t('app', 'Я принимаю {link}', ['link' =>  Html::a(Yii::t('app', 'правила и условия'), '#')])) ?>  

                <?= $form->field($model, 'order_rules', ['template' => "{input}{label}{error}"])->checkbox(['required' => false], false)->label(Yii::t('app', 'Я принимаю условия {link}', ['link' =>  Html::a(Yii::t('app', 'договора'), '#')])) ?>  

                <div class="form-group text-center">
                    <?= Html::submitButton(Yii::t('app', 'Продолжить'), ['class' => 'orange-button', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>