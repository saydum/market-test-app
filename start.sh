#!/bin/sh
composer install &&
npm install &&
npm build &&
docker-compose up -d &&
cp .env.example .env &&
php artisan migrate &&
php artisan db:seed &&
php artisan serve
