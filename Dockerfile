# Use an official PHP image with Apache and MySQL extensions
FROM php:8.1-apache

# Install MySQL extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy all project files
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
