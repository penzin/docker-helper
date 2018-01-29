# docker_helper

A very simple minimal budle for starting in docker-compose.

## Contents
1. Nginx lastes
2. Php-fpm 7.1
3. MySQL 8

## Setup
0. intsall [Docker](https://docs.docker.com/install/) & [Docker-compose](https://docs.docker.com/compose/install/)
1. Clone this repo
2. Change 'server_name' in nginx/site.conf to your actual ip
3. sudo docker-compose up
4. open http://[actual-ip]:8080.
