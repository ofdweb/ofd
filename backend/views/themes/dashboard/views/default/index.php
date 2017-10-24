<?php
use common\helpers\Html;

$this->title = Yii::t('app', 'Панель администратора');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::page_title($this->title) ?>

<div class="row mtbox">
    <?= \account\widgets\InfoWidget::widget() ?>
</div>

<div class="account-default-index">
    <?= \account\modules\project\widgets\ProjectsWidget::widget() ?>
</div>
