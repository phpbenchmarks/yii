#!/usr/bin/env bash

function clearCacheAndLogs() {
    sudo /bin/rm -rf runtime/cache/*
    [ "$?" != "0" ] && exit 1
    sudo /bin/chmod -R 777 runtime/cache
    [ "$?" != "0" ] && exit 1

    sudo /bin/rm -rf runtime/logs/*
    [ "$?" != "0" ] && exit 1
}

function init() {
    clearCacheAndLogs

    composer install --no-dev --classmap-authoritative
    [ "$?" != "0" ] && exit 1

    return 0
}
