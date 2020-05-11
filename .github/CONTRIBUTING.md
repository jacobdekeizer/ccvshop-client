# Contributing

Contributions are welcome.

## Generate new models

This package can automatically generate models for new api endpoints.

On the [documentation page](https://demo.ccvshop.nl/API/Docs/) you can find the Content-Type of ech api endpoint.

When you click on that url, you can copy the schema url endpoint like below.

This url will automatically generate the required models for the new api endpoint.
```php
$generator = new \JacobDeKeizer\Ccv\Generator\SchemaGenerator();

$generator->generate('/API/Schema/vnd.verto.webshop.resource.collection.orders.v1.json');
```

## Code sniffer

#### Unix

Check: `./vendor/bin/phpcs --standard=PSR2 --ignore=/src/model ./src`

Autofix: `./vendor/bin/phpcbf --standard=PSR2 --ignore=/src/model ./src`

#### Windows

Check: `.\vendor\bin\phpcs --standard=PSR2 --ignore=/src/model ./src`

Autofix: `.\vendor\bin\phpcbf --standard=PSR2 --ignore=/src/model ./src`