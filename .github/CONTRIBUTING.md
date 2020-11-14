# Contributing

Contributions are welcome.

## Generate new models

This package can automatically generate models for new api endpoints.

On the [documentation page](https://demo.ccvshop.nl/API/Docs/) you can find the Content-Type of each api endpoint.
When you click on the Content-Type url, you can copy the schema url endpoint like in the code below.
This url will automatically generate the required models for the new api endpoint.

You have to add this new url to the `\JacobDeKeizer\CcvGenerator\SchemaGenerator::generateAll()` method with a namespace prefix that is the same as the endpoint name.
This namespace prefix is necessary because the models can differ between endpoints.
```php
$generator->generate('/API/Schema/vnd.verto.webshop.resource.collection.orders.v1.json', 'Orders');
```

To generate the models call: `composer generate`

## Code sniffer

#### Unix

Check: `./vendor/bin/phpcs --standard=PSR2 --ignore=/src/model ./src`

Autofix: `./vendor/bin/phpcbf --standard=PSR2 --ignore=/src/model ./src`

#### Windows

Check: `.\vendor\bin\phpcs --standard=PSR2 --ignore=/src/model ./src`

Autofix: `.\vendor\bin\phpcbf --standard=PSR2 --ignore=/src/model ./src`