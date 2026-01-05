FROM php:8.2-apache

# Enable Apache rewrite (good practice)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy everything
COPY . /var/www/html

# Fix permissions (optional but safe)
RUN chown -R www-data:www-data /var/www/html
