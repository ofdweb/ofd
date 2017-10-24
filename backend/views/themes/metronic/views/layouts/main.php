<?php
 // use yii\widgets\Breadcrumbs;
  use common\widgets\Alert;
  use yii\helpers\Html;
  use themes\metronic\assets\ThemeAsset;
  use yii\widgets\Menu;
  use yii\bootstrap\Nav;
  use yii\widgets\Pjax;

  ThemeAsset::register($this);
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="<?= $bodyClass ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
      <body>
        <?php $this->beginBody() ?>
            <div class="m-grid m-grid--hor m-grid--root m-page">
              <?= $this->render('misk/_header') ?>
            </div>
        <?php $this->endBody() ?>
    </body>
</html>
        
<?php $this->endPage() ?>