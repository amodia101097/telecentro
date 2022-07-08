FROM  php:8.1.1-apache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN apt-get update && apt-get install zip -y
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions zip mbstring pdo_mysql ldap oci8 pdo_oci

WORKDIR /app

EXPOSE 8001
# RUN composer install
# CMD sleep infinity
# CMD php artisan serve --host 0.0.0.0 --port 8001
