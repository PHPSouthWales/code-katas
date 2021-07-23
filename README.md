# php-south-wales-code-katas

## Building the containers

    docker build -t php-south-wales-katas .

## Running tests

    # PHPUnit
    docker run --rm -t php-south-wales-katas phpunit

    # Pest
    docker run --rm -t php-south-wales-katas pest
