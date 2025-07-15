FROM php:8.1-cli
WORKDIR /var/www/html
COPY . /var/www/html
RUN mkdir -p Recordings
CMD php -S 0.0.0.0:10000
