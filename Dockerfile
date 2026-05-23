FROM php:8.2-apache

# Installer les extensions PDO et MySQL pour PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copie tous les fichiers du dépôt dans le serveur web
COPY . /var/www/html/

# Donne les accès nécessaires au serveur
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
