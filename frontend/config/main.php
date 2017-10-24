<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
            'enableCsrfValidation' => false,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
            'loginUrl' => '/login',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'view' => [
            'theme' => [
                'class' => 'frontend\components\Theme',
                'theme' => 'ofdweb',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
                [
                    'class' => 'common\modules\logger\components\LoggerTarget',
                    'levels' => ['info', 'error', 'warning'],
                    'logVars' => [null],
                    'categories' => [
                        'event|*',
                        'notify|*',
                        'error|*',
                        'warning|*'
                    ],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                '<action:(about|contact|home|signup|login|request-password-reset)>' => 'site/<action>',
                'account/<module:\w+>/<action:\w+>' => 'account/<module>/default/<action>',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
        
    ],
    'modules' => [
        'account2' => [
            'class' => 'common\modules\account\Module',
            'layout' => 'dashboard',
            'modules' => [
                'company' => [
                    'class' => 'common\modules\account\modules\company\Module',
                ],
                'project' => [
                    'class' => 'common\modules\account\modules\project\Module',
                ],
            ]
        ],
    ],
    'params' => $params,
];
