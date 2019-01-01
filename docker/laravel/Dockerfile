FROM php:7-fpm
RUN docker-php-ext-install pdo_mysql
WORKDIR /var/www/lavr

#ENTRYPOINT ["php7-fpm"]
#CMD ["pdo_mysql"]
#COPY run.sh /var/www/lavr/
#ENTRYPOINT ["/var/www/lavr/run.sh"]
CMD ["php"]
