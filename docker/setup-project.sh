#!/bin/bash
# Copy environment.
cp .env.example .env

# Install PHP dependencies.
composer install

# Generate application key and database.
php artisan key:generate
php artisan migrate

# Install Node.js dependencies and compile assets.
npm install
npm run production
