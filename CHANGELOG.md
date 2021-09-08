# Change log

## v1.0.0

- All endpoints, models and parameters are now automatically generated.
- Some methods have been renamed, look at the examples in the readme for your specific methods.

## v0.18.0

- Added order notes endpoint

## v0.17.1

- Fixed orders update method

## v0.17.0

- Added webhooks endpoint
- Added missing fromUrl method to `JacobDeKeizer\Ccv\Parameters\OrderRows\All` parameter.

## v0.16.0

- Added categories endpoint
- Added packages endpoint
- Added suppliers endpoint
- Endpoints are only created when they are accessed.

## v0.15.0

- Added @deprecated to the model methods docblock generated from the api documentation

## v0.14.0

- Added apps endpoint
- Fixed composer.json file php version
- Changed from PSR-2 to PSR-12 coding standard
- Cleanup endpoints
- Fixed docblocks for parameters
- urlencode QueryParameters
- PHP 8.0 support

## v0.13.0

- Added order notifications endpoint

## v0.12.0

- Added support for Guzzle 7.x
- Moved generator code to own namespace
- Renamed methods of the `ToArray` trait
    - `removeFromRequestData(string $key): bool` -> `removeFromToArrayData(string $key): bool`
    - `covertToData(string $key, $value)` -> `convertToArrayData(string $key, $value)`
- Removed protected properties of ToArray trait in `toArray()` result.
- Renamed methods of the `FromArray` trait
    - `convertFromData(string $key, $value)` -> `convertFromArrayData(string $key, $value)`
- Fixed generated setter docblock, so the information of a parameter is shown in an IDE
