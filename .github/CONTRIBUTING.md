# Contributing

Contributions are welcome.

## Generated code

This package automatically generates the API endpoints with their required models and parameters.
To fix errors within endpoints, models or parameters, you have to fix the generator code.
The generator code can be found in the `generator` folder.

To generate the client run: `composer generate`

## Documentation

Not all endpoints are documented, feel free to make a PR to document an endpoint.
Add the new endpoint to the [README.md](../README.md) under *Implemented endpoints*
and add a section in the appropriate place with all the methods the endpoint offers.

## Code sniffer

Check: `composer phpcs`

Autofix: `composer phpcbf`
