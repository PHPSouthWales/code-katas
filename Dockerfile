FROM php:8.0-cli-alpine AS base
WORKDIR /app

FROM base AS dev
ENV PATH=$PATH:/app/vendor/bin
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY composer.json .
COPY composer.lock .
RUN composer validate --strict
RUN composer install
COPY . .

FROM dev AS test
RUN pest
RUN phpunit --colors=always --testdox
