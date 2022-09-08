# https://just.systems/man/en

default:
  just --list

ci-test:
  docker-compose build --progress plain
  just composer install
  just pest

composer *args:
  just _run composer {{args}}

pest *args:
  just _run pest {{args}}

phpunit *args:
  just _run phpunit {{args}}

_run +args:
  docker-compose run --rm --entrypoint bash php -c "{{args}}"
