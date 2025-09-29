# Imagen base con PHP y Apache
FROM php:7.4-apache

# Instalar extensión mysqli para conectar con MySQL
RUN docker-php-ext-install mysqli

# Copiar el código de la app al contenedor
COPY src/ /var/www/html/

