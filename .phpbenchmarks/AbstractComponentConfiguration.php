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
        return 'benchmark/helloworld';
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
        return 1;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_hello-world/config/routes.php',
            'controller' => 'https://github.com/phpbenchmarks/yii-common/blob/yii_2_hello-world/controllers/HelloworldController.php'
        ];
    }
}
