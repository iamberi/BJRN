# Start from PHP 7.3 FPM.
FROM php:7.3-fpm

# Change working directory.
WORKDIR /var/www

# Install packages.
RUN apt-get update && apt-get install --no-install-recommends --yes \
    dos2unix \
    libicu-dev \
    npm \
    unzip

# Install PHP extensions.
RUN docker-php-ext-install \
    bcmath \
    intl \
    pdo_mysql

# Add Composer installer.
ADD https://getcomposer.org/installer composer-installer.php

# Install Composer.
RUN php composer-installer.php --install-dir=/usr/local/bin --filename=composer && rm composer-installer.php

# Copy project setup script.
COPY setup-project.sh /usr/local/bin/setup-project

# Convert line endings.
RUN dos2unix /usr/local/bin/setup-project
