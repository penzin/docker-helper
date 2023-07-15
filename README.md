# docker-helper

This is a quite simple minimal bundle for starting with docker & docker-compose. 
It consists of three containers, linked with `docker-compose.yml`.

## Contents
1. Nginx latest
2. Php-fpm 8.2
3. MySQL 8

## Install and usage
1. install [Docker & docker-compose](https://docs.docker.com/get-docker/).
2. Clone this repo
3. Change 'server_name' in nginx/site.conf to your actual ip
4. sudo docker-compose up
5. Open http://[your-actual-ip]:8080.
6. (optional) Change content of app/www/ on host machine if you need.
