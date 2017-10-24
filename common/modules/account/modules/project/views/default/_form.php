<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use account\modules\company\widgets\CompanyPageHeaderWidget;
use account\modules\company\widgets\CompanyPageBlockWidget;
/* @var $this yii\web\View */
/* @var $model account\modules\project\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form row">
    <?= CompanyPageHeaderWidget::widget(); ?>
    <div class="col-md-4">
        <?= CompanyPageBlockWidget::widget([
            'targetModel' => $model,
            'model' => $model,
            'relationField' => 'target_id',
            'modelUrl' => '/deals/default'
        ]); ?>
    </div>
    <div class="col-md-8">
      <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'company_id')->textInput() ?>

      <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'created_by')->textInput() ?>

      <?= $form->field($model, 'updated_by')->textInput() ?>

      <?= $form->field($model, 'created_at')->textInput() ?>

      <?= $form->field($model, 'updated_at')->textInput() ?>

      <?= $form->field($model, 'is_deleted')->textInput() ?>

      <div class="form-group">
          <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>

      <?php ActiveForm::end(); ?>
    </div>
</div>
