<?php

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'GpzzhwueUUztrDLOrtThYLOgn-4SRsYR',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => true,
        		'rules' => include '../vendor/phpbenchmarks/yii-common/config/routes.php',
        ],
    ],
		'controllerMap' => include '../vendor/phpbenchmarks/yii-common/config/controller-map.php',
];
return $config;
