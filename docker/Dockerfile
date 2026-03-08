FROM php:8.2-apache

# extensiones PHP comunes
RUN docker-php-ext-install pdo pdo_mysql mysqli

# habilitar mod_rewrite
RUN a2enmod rewrite

# cambiar document root a /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf

RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# evitar warning de Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf