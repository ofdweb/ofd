<?php
  use yii\helpers\Html;
  //use frontend\assets\AppAsset;
  use frontend\views\themes\ofdweb\assets\FrontAsset;
  
  Yii::$app->assetManager->forceCopy = true;
  //AppAsset::register($this);
  FrontAsset::register($this);
?>

        <?= $this->render('misk/header', ['bodyClass' => 'layout-front']) ?>
          <?= $content; ?>
        <?= $this->render('misk/footer') ?>
        
<?php $this->endPage() ?>