FROM php:8.0-cli-alpine
ENV PATH=$PATH:/app/vendor/bin
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /app
COPY composer.json .
COPY composer.lock .
RUN composer install
