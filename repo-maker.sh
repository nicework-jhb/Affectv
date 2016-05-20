#!/bin/bash

COMMAND=$1

if [[ $(id -u) != 0 ]];
then
    echo "Please start the script as root or sudo!"
    exit 1
fi

git clean -xdf && make $COMMAND