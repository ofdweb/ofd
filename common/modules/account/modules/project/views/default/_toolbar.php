<?php
  use common\helpers\Html;
?>

    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group" role="group" >
        <?= Html::a(Html::icon('th'), ['grid'], ['class' => 'btn btn-default ' . ($active == 'grid' ? 'active' : null)]) ?>
        <?= Html::a(Html::icon('th-list'), ['list'], ['class' => 'btn btn-default ' . ($active == 'list' ? 'active' : null)]) ?>
      </div>
      <div class="btn-group" role="group">
          <?= Html::a(Yii::t('app', 'Добавить проект'), ['create'], ['class' => 'btn btn-success']) ?>
      </div>
    </div>
<br/>