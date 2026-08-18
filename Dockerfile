# Use the official PHP + Apache image
FROM php:8.3-apache

# Enable Apache's rewrite module (needed for clean URLs like /student/profile)
RUN a2enmod rewrite

# Point Apache's document root to the "public" folder (LavaLust's entry point)
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Allow .htaccess overrides (needed for LavaLust routing)
RUN printf '<Directory /var/www/html/public>\n\tAllowOverride All\n\tRequire all granted\n</Directory>\n' >> /etc/apache2/apache2.conf

# Render provides the PORT env variable (default 10000) - make Apache listen on it
RUN sed -ri "s/Listen 80/Listen \${PORT:-10000}/g" /etc/apache2/ports.conf
RUN sed -ri "s/:80/:\${PORT:-10000}/g" /etc/apache2/sites-available/000-default.conf

# Copy the whole project into the container
COPY . /var/www/html

# Make sure Apache can read/write where needed (e.g. runtime/cache folders)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 10000

CMD ["apache2-foreground"]
