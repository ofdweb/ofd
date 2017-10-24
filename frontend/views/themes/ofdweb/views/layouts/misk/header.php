<?php
  use common\helpers\Html;
  use yii\widgets\Menu;
  use yii\bootstrap\NavBar;
  use yii\bootstrap\Nav;
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="<?= $bodyClass ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
      <body>
        <?php $this->beginBody() ?>
        
        <?php NavBar::begin([
          'brandLabel' => Html::img('@theme/img/logo.png', ['alt' => Yii::t('app', 'Главная')]),
          'options' => ['id' => 'header', 'class' => 'navbar navbar-fixed-top'],
          'innerContainerOptions' => ['class' => 'container-fluid']
        ]); ?>
          <?= Nav::widget([
              'encodeLabels' => false,
              'items' => $this->theme->itemMenu(),
              'options' => ['class' => 'navbar-nav navbar-left'],
          ]); ?>
          <?= Nav::widget([
              'encodeLabels' => false,
              'items' => array_merge($this->theme->userMenu(),  [
                [
                  'label' => Yii::t('app', 'Подключить'),
                  'url' => ['#'],
                  'linkOptions' => ['class' => 'connect-link'],
                ]
              ]),
              'options' => ['class' => 'navbar-nav navbar-right'],
          ]); ?>
        <?php NavBar::end(); ?>