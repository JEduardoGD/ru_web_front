#!/bin/bash
docker-compose down
git pull origin branch
docker-compose build
docker-compose up -d
docker-compose exec app mkdir -p /var/www/storage/framework/{sessions,views,cache}
docker-compose exec app composer install
docker-compose exec app php artisan migrate:refresh
docker-compose exec app php artisan key:generate
