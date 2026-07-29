FROM php:8.2-apache

# Enable Apache mod_rewrite if needed by the application
RUN a2enmod rewrite

# Copy the application code to the container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
