# Use the official PHP image as the base image
FROM php:8.2-fpm-alpine

# Copy composer.lock and composer.json into the working directory
COPY www/composer.json /var/www/html/

# Set the working directory inside the container
WORKDIR /var/www/html

# Install dependencies for Alpine Linux
RUN apk --no-cache add \
    build-base \
    libpng \
    libpng-dev \
    libjpeg-turbo \
    libjpeg-turbo-dev \
    freetype \
    freetype-dev \
    libzip-dev \
    zip \
    jpegoptim \
    optipng \
    pngquant \
    gifsicle \
    vim \
    libzip \
    unzip \
    git \
    oniguruma-dev \
    curl

# Clear cache
RUN rm -rf /var/cache/apk/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory contents to the working directory
COPY ./www/ /var/www/html

# Install project dependencies
USER root
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install

# Assign permissions of the working directory to the www-data user
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache \
    /var/www/html/vendor

# Permission to allow access
RUN chmod -R 755 \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Allowing all users to write into the logs folder
RUN chmod o+w -R /var/www/html/storage
RUN cp .env.example .env
RUN php artisan key:generate

# optimizing all cache
RUN php artisan optimize:clear

# Expose port 8090 to communicate with PHP-FPM
EXPOSE 8090

# Start PHP-FPM
CMD ["php-fpm"]