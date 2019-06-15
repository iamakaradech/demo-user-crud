#!/usr/bin/env bash
echo "### Migrate data ###"
docker exec -it laravel-app php artisan migrate
echo "### Seed data ###"
docker exec -it laravel-app php artisan db:seed --class=UserTableSeeder
