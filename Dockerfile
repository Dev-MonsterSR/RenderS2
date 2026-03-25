#Imagen php
FROM php:8.1-apache

#Instalacion de dependencias -> PostgreSQL 

RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql


#Se copia el codigo fuente al contenedor
COPY . /var/www/html/

# Exponemos el puerto 80
EXPOSE 80