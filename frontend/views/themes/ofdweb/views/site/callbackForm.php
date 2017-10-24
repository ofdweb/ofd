<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;
use common\widgets\Alert;
?>

<?php Pjax::begin(['enablePushState' => false]) ?>
  <?php $form = ActiveForm::begin([
    'action' => ['/site/callback'], 
    'options' => ['class' => 'callback-form', 'data-pjax' => true],
    'fieldConfig' => ['template' => "{input}{error}"]
  ]); ?>

      <?= Alert::widget() ?>

      <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 text-right">
                  <?= Html::label(Yii::t('app', 'Ваш телефон:')); ?>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                  <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                      'mask' => '(999) 999-9999',
                      'options' => ['id' => 'callbackform-phone-' . rand()]
                  ])->label(false) ?>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 text-right">
                  <?= Html::label(Yii::t('app', 'Ваше имя:')); ?>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                  <?= $form->field($model, 'name')->label(false) ?>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right button-col">
              <?= Html::submitButton(Yii::t('app', 'Заказать звонок'), ['class' => 'orange-button', 'name' => 'callback-button']); ?>
            </div>
      </div>
  <?php ActiveForm::end(); ?>
<?php Pjax::end() ?>