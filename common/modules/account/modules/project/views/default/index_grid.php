<?php

use common\helpers\Html;

$this->title = Yii::t('app', 'Проекты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <?= Html::page_title($this->title) ?>
  
    <?= $this->render('_toolbar', ['active' => 'grid']); ?>

    <?= \account\modules\project\widgets\ProjectsWidget::widget([
      'label' => null,
      'addNewItem' => false
    ]) ?>
</div>
