<?php

use common\helpers\Html;
use yii\grid\GridView;
/* @var $searchModel account\modules\project\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Проекты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <?= Html::page_title($this->title) ?>
  
    <?= $this->render('_toolbar', ['active' => 'list']); ?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'company_id',
            'name',
            'url:url',
            'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
