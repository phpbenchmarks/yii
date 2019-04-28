#!/usr/bin/env bash

rm -rf runtime/cache/*
chmod -R 777 runtime/cache
rm -rf runtime/logs/*

composer install --no-dev --classmap-authoritative --ansi
