FROM php:8.1-cli-bullseye

ENV PATH=$PATH:/app/vendor/bin

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app

RUN apt-get update -yqq \
  && apt-get install -yqq git unzip

COPY composer.* ./

RUN composer validate --strict
RUN composer install

COPY . .
