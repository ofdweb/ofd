<?php 
  use common\helpers\Html;
?>

<div id="wrap" class="screen1 screen-item1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="slogan">
          <div class="slogan-row1"><?=Yii::t('app', 'Быстро подключим') ?></div>
          <div class="slogan-row2 orange-color"><?=Yii::t('app', 'онлайн-кассы') ?></div>
          <div class="slogan-row3"><?=Yii::t('app', 'к интернет-магазину') ?></div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cards-bg">
            <?=Yii::t('app', 'У вас есть интернет-магазин, и вы принимаете электронные платежи?') ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 send-bg">
            <?=Yii::t('app', 'Вы уже знаете, что с 1 июля вам необходимо формировать и отправлять электронные чеки своим клиентам?') ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cash-box-bg">
            <?=Yii::t('app', 'Как с минимальными затратами средств и усилий соответствовать 54-ФЗ?') ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 hidden-sm hidden-xs right-col"></div>
    </div>
  </div>
</div>
<div class="schemes">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Как должен работать интернет-магазин в соответствии с 54-ФЗ?') ?>
        </h2>
        <div class="schemes-tabs">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#scheme1" data-toggle="tab"><span>Схема 1</span></a><div class="white"></div></li>
            <li><a href="#scheme2" data-toggle="tab"><span>Схема 2</span></a><div class="white"></div></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="scheme1">
              <?=Html::img('@theme/img/market-scheme1.png', ['alt' => Yii::t('app', '')]) ?>
            </div>
            <div class="tab-pane" id="scheme2">
              <?=Html::img('@theme/img/market-scheme2.png', ['alt' => Yii::t('app', '')]) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="request-call request-call1">
  <div class="container">
    <?= $this->render('callbackForm', ['model' => $callbackForm]) ?>
  </div>
</div>

<div class="advantages">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Наши преимущества') ?>
        </h2>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 adv-full">
            <div>
              <?=Html::img('@theme/img/adv1-symbol.png', ['alt' => Yii::t('app', '')]) ?>
              <h3>
                <?=Yii::t('app', 'Быстрая интеграция') ?>
              </h3>
              <p>
                <?=Yii::t('app', 'Простое API для интеграции, готовые модули для подключения к популярным CMS интернет-магазина.') ?> 
              </p>
              <p>
                <?=Yii::t('app', 'Отдельная услуга по интеграции КОМТЕТ Кассы «под ключ» нашими специалистами.') ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 adv-mini adv2">
            <div>
              <?=Html::img('@theme/img/adv2-symbol.png', ['alt' => Yii::t('app', '')]) ?>
              <div>
                <h3>
                  <?=Yii::t('app', 'Низкая цена') ?>
                </h3>
                <p>
                  <?=Yii::t('app', 'Всего <b>480 руб. в месяц</b> за подключение одной кассы к нашему сервису на год! Мы следим за ценами конкурентов, поэтому наши тарифы экономят Ваш бюджет.') ?> 
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 adv-mini adv3">
            <div>
              <?=Html::img('@theme/img/adv3-symbol.png', ['alt' => Yii::t('app', '')]) ?>
              <div>
                <h3>
                  <?=Yii::t('app', 'Бесплатная отправка чека') ?>
                </h3>
                <p>
                  <?=Yii::t('app', 'Мы предоставляем возможность настроить отправку электронного чека покупателю средствами нашего сервиса. Вам не придется покупать отдельную услугу ОФД.') ?> 
                </p>
              </div>
              
            </div>
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 adv-mini adv4">
            <div>
              <?=Html::img('@theme/img/adv4-symbol.png', ['alt' => Yii::t('app', '')]) ?>
              <div>
                <h3>
                  <?=Yii::t('app', 'Техподдержка 24/7') ?>
                </h3>
                <p>
                  <?=Yii::t('app', 'Техподдержка КОМТЕТ Кассы работает ежедневно и круглосуточно. Мы поможем Вам разобраться в юридических и технических вопросах.') ?> 
                </p>
              </div>
              
            </div>
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 adv-mini adv5">
            <div>
              <?=Html::img('@theme/img/adv5-symbol.png', ['alt' => Yii::t('app', '')]) ?>
              <div>
                <h3>
                  <?=Yii::t('app', 'Высокая надежность') ?>
                </h3>
                <p>
                  <?=Yii::t('app', 'Облачный сервис расположен в сертифицированном дата центре высокой надежности') ?> 
                </p>
              </div>
              
            </div>
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 adv-mini adv6">
            <div>
              <?=Html::img('@theme/img/adv6-symbol.png', ['alt' => Yii::t('app', '')]) ?>
              <div>
                <h3>
                  <?=Yii::t('app', 'Гибкая настройка') ?>
                </h3>
                <p>
                  <?=Yii::t('app', 'Наше ПО позволяет управлять очередями печати и подключать несколько сайтов к одной кассе или несколько касс к одному сайту.') ?> 
                </p>
              </div>
              
            </div>
            
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 adv-mini adv7">
            <div>
              <?=Html::img('@theme/img/adv7-symbol.png', ['alt' => Yii::t('app', '')]) ?>
              <div>
                <h3>
                  <?=Yii::t('app', 'Удобный личный кабинет') ?>
                </h3>
                <p>
                  <?=Yii::t('app', 'В любой момент Вы можете получить доступ к отчету по всем операциям с возможностью осуществления возврата по позициям.') ?> 
                </p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="payments">
  <div class="payments-inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2>
            <?=Yii::t('app', 'Оплата') ?>
          </h2>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6">
            <div class="row payments-lines">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p>
                    <?=Yii::t('app', 'Получайте оплату с банковских карт, электронными деньгами и другими способами. Отправляйте клиентам счета - email или SMS') ?>
                  </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p><?=Yii::t('app', 'Упростите повторный ввод платёжных реквизитов. Это безопасно') ?></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p><?=Yii::t('app', 'Будьте уверены в оплате заказа. Холдируйте (заблокируйте) стоимость корзины на карте клиента и спишите нужную сумму после уточнения') ?></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p><?=Yii::t('app', 'Настройте платежи по подписке (рекуррентные). Регулярная оплата будет поступать автоматически') ?></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p><?=Yii::t('app', 'При необходимости верните клиенту оплату, можно частично') ?></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p><?=Yii::t('app', 'Подключите торговую площадку (маркетплейс)') ?></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <p><?=Yii::t('app', 'Для приёма оплаты, регистрации плательщиков или партнёров используйте API') ?></p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="connect-payments">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Подключение оплаты') ?>
        </h2>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pconnect-tabs-wrapper">
        <div class="pconnect-tabs">
          <ul class="nav nav-tabs" style="display:none;">
            <li class="active"><a href="#pconnect1" data-toggle="tab"><?=Yii::t('app', '1. Регистрация') ?></a></li>
            <li><a href="#pconnect2" data-toggle="tab"><?=Yii::t('app', '2. Внесение данных') ?></a></li>
            <li><a href="#pconnect3" data-toggle="tab"><?=Yii::t('app', '3. Интеграция') ?></a></li>
          </ul>
          <div class="row links">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 active">
              <a href="#pconnect1" data-toggle="tab"><?=Yii::t('app', '1. Регистрация') ?></a>
              <?=Html::img('@theme/img/yellow-tab.png', ['alt' => Yii::t('app', ''), 'class' => 'yellow-tab-bg']) ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 middle-link"><a href="#pconnect2" data-toggle="tab"><?=Yii::t('app', '2. Внесение данных') ?></a>
              <?=Html::img('@theme/img/yellow-tab.png', ['alt' => Yii::t('app', ''), 'class' => 'yellow-tab-bg']) ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 right-link"><a href="#pconnect3" data-toggle="tab"><?=Yii::t('app', '3. Интеграция') ?></a>
              <?=Html::img('@theme/img/yellow-tab3.png', ['alt' => Yii::t('app', ''), 'class' => 'yellow-tab-bg']) ?>
            </div>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="pconnect1">
              <div class="row">
                <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                  <?=Html::img('@theme/img/pconnect1.png', ['alt' => Yii::t('app', ''), 'class' => 'pconnect-screen']) ?>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <?=Html::img('@theme/img/arrow-right-orange.png', ['alt' => Yii::t('app', ''), 
                    'class' => 'orange-arrow'
                  ]) ?>
                  <p>
                    <?=Yii::t('app', 'Ознакомьтесь с <a href="#">Договором</a> и <a href="#">Тарифами</a>') ?>
                  </p>
                  <p><?=Yii::t('app', 'Заполните форму регистрации и получите доступ в личный кабинет') ?></p>
                  <p><?=Yii::t('app', 'Проверьте свой сайт на соответствие <a href="#">Правилам и условиям</a>') ?></p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="pconnect2">
              <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 steps-row hidden-sm hidden-xs flex">
                  <?=Html::img('@theme/img/step2-1.png', ['alt' => Yii::t('app', '')]) ?>
                  <?=Html::img('@theme/img/arrow-right-orange-short.png', ['alt' => Yii::t('app', ''), 'class' => 'orange-arrow']) ?>
                  <?=Html::img('@theme/img/step2-2.png', ['alt' => Yii::t('app', '')]) ?>
                  <?=Html::img('@theme/img/arrow-right-orange-short.png', ['alt' => Yii::t('app', ''), 'class' => 'orange-arrow']) ?>
                  <?=Html::img('@theme/img/step2-3.png', ['alt' => Yii::t('app', '')]) ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="step-img hidden-lg hidden-md">
                    <?=Html::img('@theme/img/step2-1.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <p>
                    <?=Yii::t('app', 'Заполните данные о получателе в личном кабинете') ?>
                  </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="step-img hidden-lg hidden-md">
                    <?=Html::img('@theme/img/step2-2.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <p>
                    <?=Yii::t('app', 'Данные и соответствие сайта <a href="#">Правилам и условиям</a> будут проверены') ?> 
                  </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="step-img hidden-lg hidden-md">
                    <?=Html::img('@theme/img/step2-3.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <p>
                    <?=Yii::t('app', 'После внесения данных о получателе платежей автоматически сформируется Заявление о присоединении к условиям договора. Скачайте, распечатайте, и пришлите его не позднее 30 дней с момента регистрации') ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="pconnect3">
              <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 steps-row hidden-sm hidden-xs flex">
                  <?=Html::img('@theme/img/step3-1.png', ['alt' => Yii::t('app', '')]) ?>
                  <?=Html::img('@theme/img/arrow-right-orange-short.png', ['alt' => Yii::t('app', ''), 'class' => 'orange-arrow']) ?>
                  <?=Html::img('@theme/img/step3-2.png', ['alt' => Yii::t('app', '')]) ?>
                  <?=Html::img('@theme/img/arrow-right-orange-short.png', ['alt' => Yii::t('app', ''), 'class' => 'orange-arrow']) ?>
                  <?=Html::img('@theme/img/step3-3.png', ['alt' => Yii::t('app', '')]) ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="step-img hidden-lg hidden-md">
                    <?=Html::img('@theme/img/step3-1.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <p>
                    <?=Yii::t('app', 'Разместите на сайте информацию о приёме платежей, используя <a href="#">готовые информационные блоки</a>') ?>
                  </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="step-img hidden-lg hidden-md">
                    <?=Html::img('@theme/img/step3-2.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <p>
                    <?=Yii::t('app', 'Выберите способ подключения:') ?>
                  </p>
                  <ul>
                    <li><?=Yii::t('app', '- Установите и настройте модуль оплаты, используя одно из <a href="#">готовых решений</a>') ?></li>
                    <li><?=Yii::t('app', '- Осуществите техническую интеграцию <a href="#">самостоятельно</a>') ?></li>
                  </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                  <div class="step-img hidden-lg hidden-md">
                    <?=Html::img('@theme/img/step3-3.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <p>
                     <?=Yii::t('app', 'Теперь вы можете принимать платежи') ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="prices" class="prices">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Стоимость') ?>
        </h2>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 calculator">
            <h3>
              <?=Yii::t('app', 'Калькулятор') ?> <?=Html::img('@theme/img/exclamation-orange.png', ['alt' => Yii::t('app', '')]) ?>
            </h3>
            <div>
              <h4>
                <?=Yii::t('app', 'Транзакций в год') ?>
              </h4>
              <div id="transactionsValue" class="orange-color range-value">
                <span>0</span>
              </div>
              <input id="transactions" min="0" max="1000000" type="range"/>
            </div>
            <div>
              <h4>
                <?=Yii::t('app', 'Процент резервирования') ?>
              </h4>
              <div id="reservePercentValue" class="orange-color range-value">
                <span>0</span>
              </div>
              <input id="reservePercent" type="range"/>
            </div>
            <div>
              <h4>
                <?=Yii::t('app', 'Пик транзакций в секунду') ?>
              </h4>
              <div id="transactionsMaxValue" class="orange-color range-value">
                <span>0</span>
              </div>
              <input id="transactionsMax" min="0" max="10000" type="range"/>
              <p class="note">
                <span class="orange-color">*</span> <?=Yii::t('app', 'Самое большое количество транзакций, которое у вас происходит за 1 секунду') ?>
              </p>
            </div>
            <div class="calc-results">
              <p>
                <?=Yii::t('app', 'Вам рекомендовано онлайн-касс:') ?>
                <?=Html::img('@theme/img/exclamation-orange.png', ['alt' => Yii::t('app', '')]) ?>
                <span class="orange-color">21</span>
              </p>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <?=Yii::t('app', 'на 1 мес:') ?>
                  <span class="orange-color"><span>59 999</span> <?=Yii::t('app', 'р.') ?></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                  <?=Yii::t('app', 'на 1 год:') ?>
                  <span class="orange-color"><span>799 999</span> <?=Yii::t('app', 'р.') ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3>
              <?=Yii::t('app', 'Тарифы') ?>
            </h3>
            <div class="tarifs">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                  <div>
                    <?=Html::img('@theme/img/cash-desk.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <h4>
                    <?=Yii::t('app', 'Одна касса') ?>
                  </h4>
                  <p class="orange-color">
                    <?=Yii::t('app', '3000 р/мес') ?>
                  </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                  <div>
                    <?=Html::img('@theme/img/cash-desk.png', ['alt' => Yii::t('app', '')]) ?>
                    <?=Html::img('@theme/img/cash-desk.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <h4>
                    <?=Yii::t('app', 'Две кассы и более') ?>
                  </h4>
                  <p class="orange-color">
                    <?=Yii::t('app', '2000 р/мес') ?>
                  </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center plus-row">
                  <?=Yii::t('app', '+') ?>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center storage">
                  <h4>
                    <?=Yii::t('app', 'Фискальный накопитель') ?>
                  </h4>
                  <div class="storage-img">
                    <?=Html::img('@theme/img/storage.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <p class="orange-color">
                    <?=Yii::t('app', '6100 р.') ?>
                  </p>
                  <h4>
                    <?=Yii::t('app', 'В стоимость тарифа включена стоимость услуг ОФД') ?>
                  </h4>
                  <div class="text-center">
                    <?=Html::img('@theme/img/ofd.png', ['alt' => Yii::t('app', '')]) ?>
                  </div>
                  <div class="text-center">
                    <?=Html::a('Заказать', '#', [
                      'class' => 'order-link'
                    ]) ?>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="integration screen-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Интеграция') ?>
        </h2>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <p>
              <?=Yii::t('app', 'OFD WEB представляет интеграцию с популярными платформами и сервисами') ?>
            </p>
            <p class="note">
              <?=Yii::t('app', '* Идет расширение интеграции с другими платформами и сервисами') ?>
            </p>
          </div>
        </div>
        <h3>
          <?=Yii::t('app', 'CMS, CRM и учетные системы') ?>
        </h3>
        <div class="row images-row">
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
        </div>
        <div class="row images-row">
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
        </div>
        <h3>
          <?=Yii::t('app', 'Платежные агрегаторы и банки') ?>
        </h3>
        <div class="row images-row">
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
        </div>
        <div class="row images-row">
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems1.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
            <?=Html::a(Html::img('@theme/img/systems2.png', ['alt' => Yii::t('app', '')]), '#') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="request-call request-call2">
  <div class="container">
    <?= $this->render('callbackForm', ['model' => $callbackForm]) ?>
  </div>
</div>
<div class="data-center screen-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Центр обработки данных') ?>
        </h2>
        <h4>
          <?=Yii::t('app', 'Сервис ofd web расположил свои мощности в современном дата-центре в Москве, 
          уровня TierIII, соответствующем высочайшим мировым стандартам 
          предоставления услуг ЦОД.') ?>
        </h4>
        <p>
          <?=Yii::t('app', 'Многоуровневая инфраструктура комплексной защиты ЦОД включает в себя:') ?>
        </p>
        <div class="row row1">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice1.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Охранная система') ?>
            </p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice2.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Система пожаротушения') ?>
            </p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice3.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Контроль и управление доступом') ?>
            </p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice4.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Системы сигнализации') ?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice5.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Пропускной режим') ?>
            </p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice6.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Источники бесперебойного питания') ?>
            </p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice7.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Резервное электропитание') ?>
            </p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <?=Html::img('@theme/img/dcservice8.png', ['alt' => Yii::t('app', '')]); ?>
            <p>
              <?=Yii::t('app', 'Телеком инфраструктура') ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="faq-block screen-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Вопросы и ответы') ?>
        </h2>
        <h4 class="orange-color">
          <?=Yii::t('app', 'Почему интернет-магазины обязаны направлять клиенту (покупателю) кассовый чек?') ?>
        </h4>
        <p><?=Yii::t('app', 'После изменений 54-ФЗ «О применении контрольно-кассовой техники при осуществлении наличных денежных расчетов и (или) расчетов с использованием платежных карт», согласно п.3 статьи 1.2 54-ФЗ, с 1 июля 2017 г. все интернет-магазины обязаны осуществлять передачу кассового чека покупателю в электронном виде и в соответствии с п.6 статьи 1.2 54-ФЗ осуществлять передачу фискальных документов, сформированных с применением контрольно-кассовой техники (ККТ) в налоговые органы (Федеральную налоговую службу) за исключением случая, указанного в п. 7 статьи 2 54-ФЗ.') ?></p>
        <h4 class="orange-color">
          <?=Yii::t('app', 'Почему интернет-магазины обязаны направлять клиенту (покупателю) кассовый чек?') ?>
        </h4>
        <p><?=Yii::t('app', 'После изменений 54-ФЗ «О применении контрольно-кассовой техники при осуществлении наличных денежных расчетов и (или) расчетов с использованием платежных карт», согласно п.3 статьи 1.2 54-ФЗ, с 1 июля 2017 г. все интернет-магазины обязаны ') ?></p>
        <h4 class="orange-color">
          <?=Yii::t('app', 'Оплата услуг нашей организации осуществляется через платёжные системы, снимается ли с нас обязанность выдавать кассовый чек клиенту?') ?>
        </h4>
        <p><?=Yii::t('app', 'После изменений 54-ФЗ «О применении контрольно-кассовой техники при осуществлении наличных денежных расчетов и (или) расчетов с использованием платежных карт», согласно п.3 статьи 1.2 54-ФЗ, с 1 июля 2017 г. все интернет-магазины обязаны осуществлять передачу кассового чека покупателю в электронном виде и в соответствии с п.6 статьи 1.2 54-ФЗ осуществлять ') ?></p>
        <div class="answers text-center">
          <?=Html::a(Html::img('@theme/img/book-symbol.png', ['alt' => Yii::t('app', '')]), '#') ?>
          <p>
            <?=Yii::t('app', 'Все ответы на часто задаваемые вопросы') ?>
          </p>
          <p>
            <?=Html::a(Yii::t('app', 'читайте здесь'), '#') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="register screen-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Регистрация') ?>
        </h2>
      </div>
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
        <div class="row register-block">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <?= $this->render('signupForm', ['model' => $signupForm]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="news screen-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Новости') ?>
        </h2>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3 class="orange-color">
              <?=Yii::t('app', '<b>1</b> августа') ?>
            </h3>
            <div>
              <?=Html::a(Yii::t('app', 'Комиссии по банковским картам 2,7%'), '#') ?>
            </div>
            <p>
              <?=Yii::t('app', 'С 24 мая 2017 года по тарифному плану «Интернет-магазин» размер комиссии при платежах с банковских карт - 2,7%. Для новых клиентов данная ставка действует с даты') ?>
            </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3 class="orange-color">
              <?=Yii::t('app', '<b>2</b> августа') ?>
            </h3>
            <div>
              <?=Html::a(Yii::t('app', 'PayAnyWay на ECOM Expo 2017'), '#') ?>
            </div>
            <p>
              <?=Yii::t('app', 'Уважаемые партнёры! 24-25 мая 2017г. в КВЦ "Сокольники" пройдёт ECOM Expo 2017 -крупнейшая в России и Восточной Европе выставка технологий для интернет-торговли.') ?>
            </p>
          </div>
        </div>
        <div>
              <?=Html::a(Yii::t('app', 'Все новости'), '#', ['class' => 'all-news-link']) ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ask-question screen-item">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <?=Yii::t('app', 'Задать вопрос') ?>
        </h2>
        <p class="text-center">
          <?=Yii::t('app', 'Посмотрите раздел') ?> <?=Html::a(Yii::t('app', 'Вопросы и ответы'), '#') ?>, <?=Yii::t('app', 'при необходимости свяжитесь с нами') ?>
        </p>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <?=Yii::t('app', 'Телефон:') ?>
            <?= Html::tel(Yii::$app->params['supportPhone'], Yii::$app->params['supportPhone']) ?>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <?=Yii::t('app', 'Коммерческий отдел:') ?>
            <?= Html::mailto(Yii::$app->params['supportEmail'], Yii::$app->params['supportEmail']) ?>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
            <?=Html::a(Yii::t('app', 'Задать вопрос'), '#', ['class' => 'ask-btn orange-button']) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>