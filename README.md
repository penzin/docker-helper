# docker-helper

This is a quite simple minimal bundle for starting with docker & docker-compose. 
It consists of three containers, linked with `docker-compose.yml`.

## Contents
1. Nginx latest
1. Php-fpm 8.2
1. MySQL 8

## Install and usage
1. install [Docker & docker-compose](https://docs.docker.com/get-docker/).
1. Clone this repo
1. Prepare `.env` file: `cp .env.dist .env`
1. Run `docker-compose up -d`
1. Open http://127.0.0.1:8080.
1. Enjoy :)

## Useful commands
- `docker compose down` - stop all bundled containers
- `docker ps -a` - show all containers
- `docker compose rm` - remove all containers in current directory
- `docker exec -it {containerName} bash` - go into {containerName} container, for example: `docker exec -it php-fpm bash`
- `docker compose config` - check docker compose configuration with actual .env variables values
