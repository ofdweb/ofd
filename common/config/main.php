<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'ru-RU',
    'bootstrap' => ['base'],
    'components' => [
        'base' => [
            'class' => 'common\components\Base'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app'       => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'formatter' => [
            'locale' => 'ru-RU',
            'timeZone' => 'UTC',
            'dateFormat' => 'php:Y-m-d',
            'datetimeFormat' => 'php:Y-m-d H:i',
            'timeFormat' => 'php:H:i',
            //'decimalSeparator' => ',',
            'nullDisplay' => 'пусто',
            'thousandSeparator' => ' ',
            'currencyCode' => 'RUB',
       ],
    ],
    'modules' => [
        'logger' => [
            'class' => 'common\modules\logger\Module',
        ],
    ],
];
