# Use PHP 8.2 FPM Alpine as base image
FROM php:8.2-fpm-alpine 

# Install PDO and PDO MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql

# Update package repositories and install Supervisor
RUN apk update && \
    apk add --no-cache supervisor

# Create directory for Supervisor logs and set permissions
RUN mkdir -p "/var/log/supervisor" && \
    chown -R www-data:www-data /var/log/supervisor

# Copy the Supervisor configuration file into the container
COPY .docker/supervisor/supervisord.conf /etc/supervisor/supervisord.conf

# Start Supervisor with the custom configuration
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]
