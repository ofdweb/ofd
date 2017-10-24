<?php
  use yii\helpers\Html;
  use frontend\views\themes\ofdweb\assets\ThemeAsset;
  
  Yii::$app->assetManager->forceCopy = true;
  ThemeAsset::register($this);
?>

        <?= $this->render('misk/header', ['bodyClass' => 'layout-auth']) ?>
        <div id="wrap">
            <div class="container">
              <?= $content; ?>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
        <?php // $this->render('misk/footer') ?>
        
<?php $this->endPage() ?>