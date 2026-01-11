FROM php:8.4.17RC1-apache-trixie

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80

CMD ["/usr/sbin/apache2ctl","-DFOREGROUND"]
