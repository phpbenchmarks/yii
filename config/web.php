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
        		'rules' => include 'routes.php',
        ],
    	'i18n' => [
    			'translations' => [
    				'phpbenchmarks*' => [
    						'class' => 'PhpBenchmarksYiiRest\services\FallbackPhpMessageSource',
    						'basePath' => '@app/translations',
    						'sourceLanguage' => 'en',
    						'fallback'=> 'en',
    						'fileMap' => [
    								'benchmarks' => 'phpbenchmarks.php',
    						],
    				],
    		],
    	],
    	'response' => [
    			'formatters' => [
    					\yii\web\Response::FORMAT_JSON => [
    							'class' => 'yii\web\JsonResponseFormatter',
    							'prettyPrint' => YII_DEBUG, // use "pretty" output in debug mode
    							'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
    				],
    			],
    		],
    ],
	'controllerMap' => include '../vendor/phpbenchmarks/yii-common/config/controller-map.php',
];
return $config;
