# php-south-wales-code-katas

## Building the containers

    docker build -t php-south-wales-katas .

## Running tests (no volumes)

    # PHPUnit
    docker run --rm -t php-south-wales-katas phpunit

    # Pest
    docker run --rm -t php-south-wales-katas pest

## Running tests (with volumes)

    # PHPUnit
    docker run --rm -t -v $(pwd):/app php-south-wales-katas phpunit

    # Pest
    docker run --rm -t -v $(pwd):/app php-south-wales-katas pest
