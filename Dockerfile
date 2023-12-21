#FROM php:8.3-apache
FROM pugpig/distdev:v2.5
#RUN docker-php-ext-install mysqli

COPY src/ /var/www/html/
