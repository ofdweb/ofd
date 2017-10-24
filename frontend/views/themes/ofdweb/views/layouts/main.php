<?php
 // use yii\widgets\Breadcrumbs;
  use common\widgets\Alert;
  use yii\helpers\Html;
  use frontend\views\themes\ofdweb\assets\ThemeAsset;
  
  Yii::$app->assetManager->forceCopy = true;
  ThemeAsset::register($this);
?>

        <?= $this->render('misk/header', ['bodyClass' => 'layout-main']) ?>
          <div id="wrap">
            <div class="container">
                <?= Alert::widget() ?>
                <?= $content; ?>
            </div>
          </div>
        <?= $this->render('misk/footer') ?>
        
<?php $this->endPage() ?>