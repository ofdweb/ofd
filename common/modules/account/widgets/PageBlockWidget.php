<?php
namespace account\widgets;

use Yii;
use common\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;

abstract class PageBlockWidget extends \yii\widgets\Pjax
{   
    public $title;
    public $view;
    public $block_id;
    public $errorText = 'Ошибка выполнения';
    
    public $modelUrl;
    public $targetUrl;

    public $viewData = [];
    public $model;
    public $targetModel;
    public $relationField;
    
    public $scripts;
    
    private $_id;
    private $_options;
    private $_urls;
    private $_containers;
    
    /**
     * @inheritdoc
     */
    public $timeout = 10000;
    
    public static $autoIdPrefix = 'pjax-block__';
    
    public $options = [];
    
    public $linkSelector = false;
    
    public $formSelector = false;
    
    public $enablePushState = true;
    
    public $enableReplaceState = false;
    
    public $clientOptions = [];
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->initBlock();
        $this->initContainers();
        $this->initUrls();
        $this->initViewValues();
        $this->initOptions();
        
        parent::init();
    }
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->renderBlock();
        parent::run();
    }
    
    /**
     * BLOCK
     */
     
    public function initBlock()
    {
        if (!$this->view && $this->block_id) {
            //$this->view = $this->block_id . '_block';
        }
        
        $this->errorText = Json::htmlEncode(Yii::t('app', $this->errorText));
    }

    public function getId($autoGenerate = true)
    {
        if ($autoGenerate && $this->_id === null) {
            $this->_id = static::$autoIdPrefix . $this->block_id;
        }

        return $this->_id;
    }
    
    public function visibleLink()
    {
        return $this->targetModel ? true : false;
    }
    /**
     * RENDER
     */
    private function renderBlock()
    {
        return Html::tag(
            'div', 
            implode('', $this->partsBlock()), 
            $this->getOption('block')
        );
    }
    
    public function partsBlock()
    {
        return [
            'header' => $this->renderHeader(),
            'body' => $this->renderBody()
        ];
    }
    
    private function renderBody()
    {
        return Html::tag(
            'div', 
            $this->render($this->block_id . '_block', $this->getViewValues()), 
            $this->getOption('body')
        );
    }
    
    public function render($view, $params = [])
    {
        if (Yii::$app->request->isAjax) {
            return $this->getView()->renderAjax($view, $params, $this);
        }

        return parent::render($view, $params);
    }
    
    private function renderHeader()
    {
        $result = [
            $this->renderTitle(),
            $this->renderButtons(),
            Html::tag('div', null, ['class' => 'clearfix'])
        ];
        
        return Html::tag(
            'div', 
            implode('', $result), 
            $this->getOption('header')
        );
    }
    
    private function blockFile($file)
    {
        return $this->view . '/' . $file;
    }
    
    private function renderTitle()
    {
        return $this->title ? Html::label(Yii::t('app', $this->title), null, $this->getOption('title')) : null;
    }
    
    private function renderButtons()
    {
        return Html::tag(
            'div', 
            implode(' ', $this->headerButtons()), 
            $this->getOption('buttons')
        );
    }
    
    private function headerButtons()
    {
        return [
            'edit' => $this->renderEditButton(),
            'settings' => $this->renderSettingDropDown()
        ];
    }
    
    private function renderSettingDropDown()
    {
        $items = $this->settingItems();
        return $items ? \yii\bootstrap\ButtonDropdown::widget([
            'label' => Html::icon('cog'),
            'encodeLabel' => false,
            'options' => $this->getOption('button'),
            'dropdown' => [
                'items' => $this->settingItems(),
            ],
        ]) : null;
    }
    
    public function settingItems()
    {
        return [];
    }
    
    private function renderEditButton()
    {
        $options = array_merge($this->getOption('button'), [
            'data-edit-link' => true,
        ]);
        
        return $this->visibleLink() ? Html::a(Html::icon('pencil'), $this->generateTargetUrl('update'), $options) : null;
    }
    
    /**
     * URLS
     */
    
    public function generateTargetUrl($url)
    {
        $url = $this->targetUrl . '/' . ($this->getUrl($url) ?: $url);
        return $this->targetModel ? Url::to([$url, 'id' => $this->targetModel->primaryKey]) : $url;
    }
    
    public function generateModelUrl($url)
    {
        $url = $this->modelUrl . '/' . ($this->getUrl($url) ?: $url);
        return $this->model ? Url::to([$url, 'id' => $this->model->primaryKey]) : $url;
    }

    public function getUrl($key)
    {
        return $this->_urls[$key];
    }
    
    public function initUrls()
    {
        $this->_urls = [
            'update' => 'update',
            'view' => 'view',
            'detach' => 'detach',
            'change' => 'change',
            'refresh-block' => 'refresh-block'
        ];
    }
    
    /**
     * CONTAINERS
     */
    public function getContainer($key, $encode = true)
    {
        $key = is_array($key) ? $key : [$key];

        foreach ($key as $el) {
            $container[] = $this->_containers[$el];
        }

        return $encode ? Json::htmlEncode(implode(',', $container)) : implode(',', $container);
    }
    
    private function initContainers()
    {
        $this->_containers = [
            'block' => '#' . $this->getId(),
            'main' => '#main-pjax-container',
            'header' => '#' . $this->getId() . ' .panel-header',
            'body' => '#' . $this->getId() . ' .panel-body',
            'panel' => '#' . $this->getId() . ' .panel'
        ];
    }
    
    /**
     * OPTIONS
     */
    
    public function getOption($option)
    {
        return $this->_options[$option];
    }
    
    public function setOption($option, $data)
    {
        $this->_options[$option] = $data;
    }
    
    public function addOptions($options)
    {
        $this->_options = array_merge($options, $this->_options);
    }
    
    public function addOption($option, $data)
    {
        $this->_options[$option] = array_merge($data, $this->_options[$option]);
    }
    
    private function initOptions()
    {
        $this->_options = [
            'block' => ['class' => 'panel panel-default'],
            'header' => ['class' => 'panel-heading'],
            'body' => ['class' => 'panel-body'],
            'title' => ['class' => 'text-uppercase text-primary pull-left'],
            'buttons' => ['class' => 'pull-right'],
            'button' => [
                'class' => 'btn btn-sm btn-default',
                //'data' => ['header-link' => true]
            ],
        ];
        
        //$this->options = array_merge($this->getOption('block'), $this->options);
        /*
        $this->clientOptions = array_merge([
            'container' => $this->getContainer('main')
        ], $this->clientOptions);
        */
    }
    
    /**
     * VIEW
     */
     
    private function initViewValues() 
    {
        $this->addViewValues([
            'targetModel' => $this->targetModel,
            'model' => $this->model,
            'changeUrl' => $this->generateTargetUrl('change'),
            'detachUrl' => $this->generateModelUrl('detach')
        ]);
    }

    public function setViewValue($key, $value)
    {
        $this->viewData[$key] = $value;
    }
    
    public function addViewValues($values)
    {
        $this->viewData = array_merge($this->viewData, $values);
    }
    
    public function getViewValue($key)
    {
        return $this->viewData[$key];
    }
    
    public function getViewValues()
    {
        return $this->viewData;
    }
    
    /**
     * JS
     */
     
    public function getScriptData()
    {
        return [
            'relationField' => $this->relationField,
            'targetModelClass' => $this->targetModel ? $this->targetModel::className() : null, 
            'targetModelPk' => $this->targetModel ? $this->targetModel->primaryKey : 0,
            'modelClass' => $this->model ? $this->model::className() : null, 
            'modelPk' => $this->model ? $this->model->primaryKey : 0,
        ];
    }
     
    public function registerLinks()
    {
        $container = $this->getContainer('block');
        $containerBody = $this->getContainer('body');

        $options = Json::htmlEncode(array_merge($this->clientOptions, [
            'data' => $this->getScriptData()
        ]));

        $this->scripts['link_setting'] = <<< PJAX
            $($container).pjax('a[data-setting-link]', $containerBody, $options);
PJAX;
        
        $options = Json::htmlEncode(array_merge($this->clientOptions, [
            'data' => $this->getScriptData(),
            'type' => 'POST'
        ]));
        
        $this->scripts['link_setting_post'] = <<< PJAX
            $($container).pjax('a[data-setting-link-post]', $containerBody, $options);
PJAX;
        
        $options = Json::htmlEncode(array_merge($this->clientOptions, [
            'data' => $this->getScriptData(),
            'type' => 'POST',
            'refreshBlock' => true
        ]));
        
        $this->scripts['link_detach'] = <<< PJAX
            $($container).pjax('a[data-setting-detach]', $containerBody, $options);
PJAX;
        
        $options = Json::htmlEncode(array_merge($this->clientOptions, [
            'container' => $this->getContainer('main', false)
        ]));

        $this->scripts['link_edit'] = <<< PJAX
            $($container).pjax('a[data-edit-link]', $options);
PJAX;

        $options = Json::htmlEncode(array_merge($this->clientOptions, [
            'type' => 'POST',
            'refreshBlock' => true
        ]));
        
        $this->scripts['link_cancel'] = <<< PJAX
            $($container).on('click', 'a[data-setting-cancel]', function(event) {
                event.preventDefault();
                $.pjax.reload($options);
            });
PJAX;
    }

    
    public function registerEvents()
    {
        $container = $this->getContainer(['block', 'main']);

        $options = Json::htmlEncode(array_merge($this->clientOptions, [
            'container' => $this->getContainer('panel', false),
            'fragment' => '.panel'
        ]));

        $this->scripts['event_complete'] = <<< PJAX
            $($container).on('pjax:complete', function(data, status, xhr, options) { 
                if (options.refreshBlock == true && options.type == 'POST') {
                    $.pjax.reload($options);    
                }
            });
PJAX;

        $this->scripts['event_error'] = <<< PJAX
            $($container).on('pjax:error', function(event) {
                alert($this->errorText);
                event.preventDefault();
            });
PJAX;
    }
    
    public function registerForm()
    {
        $container = $this->getContainer(['block', 'main']);
        $mainContainer = $this->getContainer('main');
        
        $options = Json::htmlEncode(array_merge($this->clientOptions, [
            'refreshBlock' => true
        ]));
        
        $this->scripts['form_submit'] = <<< PJAX
            $($container).on('submit', 'form', function(event) {
                event.preventDefault(); // stop default submit behavior
                $.pjax.submit(event, $mainContainer, $options);
            });
PJAX;
    }
    
    public function registerCustomScript() { }
    
    public function registerScript()
    {
        $this->registerLinks();
        $this->registerEvents();
        $this->registerForm();
        $this->registerCustomScript();
    }
    
    /**
     * @inheritdoc
     */
    public function registerClientScript()
    {
        parent::registerClientScript();

        $this->registerScript();
        
        if ($this->scripts) {
            foreach ($this->scripts as $js) {
                $this->registerJs($js);
            }
        }
        
    }
     
    public function registerJs($js)
    {
        $this->getView()->registerJs($js, $this->getView()::POS_END);
    }
}