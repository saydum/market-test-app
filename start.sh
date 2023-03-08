#!/bin/sh
composer install &&
npm install &&
npm run build &&
docker-compose up -d &&
cp .env.example .env &&
php artisan migrate:refresh &&
php artisan db:seed &&
php artisan key:generate &&
php artisan serve
