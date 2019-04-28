<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 2;
    }

    public static function getComponentName(): string
    {
        return 'Yii';
    }

    public static function getComponentSlug(): string
    {
        return 'yii';
    }

    public static function isPhp56Enabled(): bool
    {
        return true;
    }

    public static function isPhp70Enabled(): bool
    {
        return true;
    }

    public static function isPhp71Enabled(): bool
    {
        return true;
    }

    public static function isPhp72Enabled(): bool
    {
        return true;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'benchmark/rest';
    }

    public static function getCoreDependencyName(): string
    {
        return 'yiisoft/yii2';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 2;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 0;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 18;
    }

    public static function getBenchmarkType(): int
    {
        return 3;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_rest-api/config/controller-map.php#L4',
            'controller' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_rest-api/controllers/RestapiController.php',
            'randomizeLanguageDispatchEvent' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_rest-api/controllers/RestapiController.php#L18',
            'randomizeLanguageEventListener' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_rest-api/EventListener/DefineLocaleEventListener.php',
            'translations' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_rest-api/translations/en_GB/phpbenchmarks.php',
            'translate' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_rest-api/models/ShadowUser.php#L36',
            'serialize' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_rest-api/models/ShadowUser.php'
        ];
    }
}