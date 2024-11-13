FROM php:fpm
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
COPY --from=composer:2.0 /usr/bin/composer /usr/local/bin/composer

FROM fauria/vsftpd
RUN apt-get update && apt-get install -y libpam-mysql
COPY ./vsftpd.conf /etc/vsftpd.conf
COPY ./pam_mysql /etc/pam.d/vsftpd
EXPOSE 21 21100-21110
CMD ["/usr/sbin/vsftpd", "/etc/vsftpd.conf"]