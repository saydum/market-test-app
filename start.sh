#!/bin/sh
docker-compose up -d &&
cp .env.example .env &&
php artisan migrate &&
# php artisan db:seed &&
php artisan serve
