# Utiliza la imagen oficial de PHP
FROM php:7.4-apache

# Copia los archivos de la aplicación al contenedor
COPY src/ /var/www/html/

# Expone el puerto 80 para Apache
EXPOSE 80
