#!/usr/bin/env bash
# credit: https://github.com/tryolabs/nginx-docker

if [ ! -f .initialized ]
then
    echo 'Initialized container'
    apt update -y
    apt install php vim -y	
    cp /sites/example.com/public/maintenance.html /usr/share/nginx/html
 	touch .initialized
fi
cp /sites/example.com/public/maintenance.html /usr/share/nginx/html