<?php 
  use common\helpers\Html;
?>
    
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        &copy; <?=Yii::t('app', 'Платёжный сервис «OFD»') ?>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-col">
        <?= Html::a(Html::img('@theme/img/logo.png', ['alt' => Yii::t('app', 'Главная')]), ['/'], ['class' => 'logo']) ?>
      </div>
    </div>
  </div>
</div>
<?php $this->endBody() ?>
    </body>
</html>