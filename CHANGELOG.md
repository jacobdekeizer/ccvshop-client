# Change log

## v0.14.0

- Add apps endpoint
- Fix composer.json file php version
- Changed from PSR-2 to PSR-12 coding standard
- Cleanup endpoints
- Fixed docblocks for parameters
- urlencode QueryParameters
- PHP 8.0 support

## v0.13.0

- Add order notifications endpoint

## v0.12.0

- Add support for Guzzle 7.x
- Moved generator code to own namespace
- Renamed methods of the `ToArray` trait
    - `removeFromRequestData(string $key): bool` -> `removeFromToArrayData(string $key): bool`
    - `covertToData(string $key, $value)` -> `convertToArrayData(string $key, $value)`
- Removed protected properties of ToArray trait in `toArray()` result.
- Renamed methods of the `FromArray` trait
    - `convertFromData(string $key, $value)` -> `convertFromArrayData(string $key, $value)`
- Fix generated setter docblock, so the information of a parameter is shown in an IDE