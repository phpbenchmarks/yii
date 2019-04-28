#!/usr/bin/env bash

set -e

rm -rf runtime/cache/*
chmod -R 777 runtime/cache
rm -rf runtime/logs/*

composer install --no-dev --classmap-authoritative --ansi

pwd=$(pwd)
langEn="$pwd/vendor/phpbenchmarks/yii-common/translations/en/phpbenchmarks.php"
langEnGb="$pwd/vendor/phpbenchmarks/yii-common/translations/en_GB/phpbenchmarks.php"
langFrFr="$pwd/vendor/phpbenchmarks/yii-common/translations/fr_FR/phpbenchmarks.php"

if [ -L "$pwd/translations/aa_BB/phpbenchmarks.php" ]; then
    rm "$pwd/translations/aa_BB/phpbenchmarks.php"
fi
ln -s "$langEn" translations/aa_BB

if [ -L "$pwd/translations/en_GB/phpbenchmarks.php" ]; then
    rm "$pwd/translations/en_GB/phpbenchmarks.php"
fi
ln -s "$langEnGb" translations/en_GB

if [ -L "$pwd/translations/fr_FR/phpbenchmarks.php" ]; then
    rm "$pwd/translations/fr_FR/phpbenchmarks.php"
fi
ln -s "$langFrFr" translations/fr_FR
