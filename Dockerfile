FROM php:8.0-cli-alpine
WORKDIR /app
ENV PATH=$PATH:/app/vendor/bin
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY composer.json .
COPY composer.lock .
RUN composer validate --strict
RUN composer install
COPY . .
