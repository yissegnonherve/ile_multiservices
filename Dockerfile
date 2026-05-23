FROM php:8.2-apache

# Copie tous les fichiers du dépôt dans le serveur web
COPY . /var/www/html/

# Donne les accès nécessaires au serveur pour lire vos fichiers
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
