FROM php:7.4-apache
COPY ./www /var/www/html/
RUN chown www-data /var/www/html/TP2/upload
EXPOSE 80





