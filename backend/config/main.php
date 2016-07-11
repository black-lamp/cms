<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',

    'language' => 'ru',
    'sourceLanguage' => 'ru',

    'homeUrl' => '/admin',
    'defaultRoute' => 'dashboard',
    'modules' => [
        'articles' => [
            'class' => 'bl\articles\backend\Module'
        ],
        'languages' => [
            'class' => 'bl\cms\language\Module'
        ],
        'redirect' => [
            'class' => 'bl\cms\redirect\Module'
        ],
        'shop' => [
            'class' => 'bl\cms\shop\backend\Module',
        ],
    ],
    'components' => [
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@backend/messages',
                    'sourceLanguage' => 'uk',
                    'fileMap' => [
                        'shop' => 'shop.php'
                    ],
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'baseUrl' => '/admin',
        ],
        'urlManager' => [
            'class' => 'bl\multilang\MultiLangUrlManager',
            'baseUrl' => '/admin',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'view' => [
            'theme' => [
                'basePath' => '@backend/themes/' . $params['themeName'],
                'baseUrl' => '@web/themes/' . $params['themeName'],
                'pathMap' => [
                    '@vendor/black-lamp/blcms-shop/backend/views' => '@backend/themes/' . $params['themeName'] . '/modules/blcms-shop/views'
                ],
            ],
        ],
    ],
    'params' => $params,
];
