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

    'homeUrl' => '/',
    'modules' => [
        // TODO: require modules
    ],

    'components' => [
        'request' => [
            'baseUrl' => '/',
        ],
        'view' => [
            'theme' => [
                'basePath' => '@frontend/themes/' . $params['themeName'],
                'baseUrl' => '@web/themes/' . $params['themeName'],
                'pathMap' => [
                    '@frontend/views' => '@frontend/themes/' . $params['themeName'] . '/views',
                    '@vendor/black-lamp/yii2-articles/frontend/views' => '@frontend/themes/' . $params['themeName'] . '/modules/yii2-articles'
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
            'errorAction' => '/error',
        ],
        'urlManager' => [
            'class' => 'bl\multilang\MultiLangUrlManager',
            'baseUrl' => '/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'cache' => null,
            'rules' => [
                /*[
                    'class' => 'bl\seo\SeoUrlRule',
                    'modelClass' => \bl\articles\entities\ArticleTranslation::className(),
//                    'prefix' => 'articles/',
                    'route' => 'articles/index',
                    'params' => [
                        'id' => 'article_id'
                    ],
                    'condition' => [
                        'language_id' => function() {
                            return \bl\multilang\entities\Language::getCurrent()->id;
                        }
                    ]
                ]*/
                [
                    'class' => 'bl\articles\UrlRule',
                ]
            ],
        ],
    ],
    'as RedirectBehavior' => [
        'class' => 'bl\cms\redirect\behaviors\RedirectBehavior'
    ],
    'params' => $params,
];
