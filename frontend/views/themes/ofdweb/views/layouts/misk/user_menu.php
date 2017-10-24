<?php
use yii\widgets\Menu;
use common\helpers\Html;
?>

<div class="pull-left"><?= Html::icon('user') ?></div>
<div class="pull-right">
    <h4><?= $model->userName ?></h4>
    <h5 class="grey-color"><?= $model->userEmail ?></h5>
</div>
<div class="clearfix"></div>
<hr />
    <?= Menu::widget([
        'encodeLabels' => false,
        'options' => ['class' => 'list-group'],
        'itemOptions' => ['class' => 'list-group-item'],
            'items' => [
                [
                    'label' => Yii::t('app', 'Личный кабинет', ['icon' => Html::icon('user')]),
                    'url' => ['/account']
                ],
                [
                    'label' => Yii::t('app', 'Настройки', ['icon' => Html::icon('cog')]),
                    'url' => ['/account']
                ],
                [
                    'label' => Yii::t('app', 'Уведомления', ['icon' => Html::icon('bell')]),
                    'url' => ['/account'],
                    'template' => '<a href="{url}">{label}</a><span class="badge">0</span>'
                ],
                [
                    'label' => Yii::t('app', 'Выйти', ['icon' => Html::icon('log-out')]),
                    'url' => ['/site/logout'],
                    'template' => '<a href="{url}" data-method="post">{label}</a>'
                ]
             ],
    ]); ?>