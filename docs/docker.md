## Uso de Docker

Se crearon los archivos Dockerfile y docker-compose.yml, en los cuales se utilizan para levantar las imagenes de php y mysql. 
Dockerfile utilizado para modificar la direccion en la cual se busca el index.php.

```docker
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
```

docker-compose utilizado para levantar los contenedores.

```
services:

  php:
    build: .
    container_name: php
    restart: unless-stopped
    ports:
      - "8080:80"
    volumes:
      - ../:/var/www/html
  mysql:
    image: mysql:8.0
    container_name: mysql
    restart: unless-stopped
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: app_db
      MYSQL_USER: app_user
      MYSQL_PASSWORD: app_pass
    ports:
      - "3306:3306"
    volumes:
      - mysql_data:/var/lib/mysql

volumes:
  mysql_data:
```

 Para probar la base de datos, se descargo DBeaver en el cual se levanto el motor de MySQL, conexion exitosa.