<?php
 // use yii\widgets\Breadcrumbs;
  use common\widgets\Alert;
  use common\helpers\Html;
  use account\assets\AccountAsset;
  use yii\widgets\Menu;
  use yii\bootstrap\Nav;
  use yii\widgets\Pjax;

  Yii::$app->assetManager->forceCopy = true;
  AccountAsset::register($this);
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
        <section id="container">
        <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/" class="logo"><?= Html::img('@theme/img/logo.png', ['alt' => Yii::t('app', 'Главная')]) ?></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">0</span>
                        </a>
                        
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">0</span>
                        </a>
                        
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<?= Nav::widget([
                  'encodeLabels' => false,
                  'items' => $this->theme->userMenu(),
                  'options' => ['class' => 'navbar-nav navbar-right'],
              ]); ?>
              
            </div>
        </header>

        <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <?= Menu::widget([
                      'encodeLabels' => false,
                      'options' => ['class' => 'sidebar-menu', 'id' => 'nav-accordion'],
                      //'itemOptions' => ['class' => 'list-group-item'],
                      'items' => Yii::$app->getModule('account')->itemMenu(),
                    ]); ?>
                </div>
        </aside>
        <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <?php Pjax::begin(['linkSelector' => 'a:not([data-pjax=0])', 'options' => ['class' => 'col-lg-9 main-chart']]); ?>
                            <?= Alert::widget() ?>
              
                            <?= $content; ?>
                        <?php Pjax::end(); ?>
                      
                        <div class="col-lg-3 ds">
                            <div class="block">
                                <?= \common\modules\logger\widgets\EventsWidget::widget() ?>
                            </div>
                            <div class="block">
                                <?= \account\widgets\UsersWidget::widget() ?>
                            </div>
                        </div>
                    </div>
                </section>
          </section>
          
         <!-- <footer class="site-footer">
              <div class="text-center">
                  2014 - Alvarez.is
                  <a href="index.html#" class="go-top">
                      <i class="fa fa-angle-up"></i>
                  </a>
              </div>
          </footer> -->

    </section>
    <?php $this->endBody() ?>
    </body>
</html>
        
<?php $this->endPage() ?>