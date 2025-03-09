# Use an official PHP-Apache image
FROM php:8.1-apache

# Enable required modules
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy project files to the container
COPY . /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
