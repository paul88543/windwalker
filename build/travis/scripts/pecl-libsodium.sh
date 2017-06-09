#!/bin/sh

if [ $TRAVIS_PHP_VERSION != hhvm ]; then
    pear clear-cache;
    pear update-channels;
    pear upgrade;
    pecl install libsodium;
fi
