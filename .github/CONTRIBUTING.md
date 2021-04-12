# Contributing

Contributions are welcome.

## Generate new models

This package can automatically generate models for new API endpoints.

On the [documentation page](https://demo.ccvshop.nl/API/Docs/) you can find the Content-Type of each API endpoint.
When you click on the Content-Type URL, you can copy the schema URL endpoint like in the code below.
This URL will automatically generate the required models for the new API endpoint.

You have to add this new URL to the `\JacobDeKeizer\CcvGenerator\SchemaGenerator::generateAll()` method 
with a namespace prefix that is the same as the endpoint name.

This namespace prefix is necessary because the models can differ between endpoints.
```php
$generator->generate('/API/Schema/vnd.verto.webshop.resource.collection.orders.v1.json', 'Orders');
```

Generate the models: `composer generate`

## Documentation

Before submitting a pull request, please add the endpoint the [README.md](../README.md)
under *Implemented endpoints* and add a section in the appropriate place with all the methods
the endpoint offers.

## Code sniffer

Check: `composer phpcs`

Autofix: `composer phpcbf`
