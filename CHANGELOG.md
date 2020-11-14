# Change log

## v0.12.0

- Moved generator code to own namespace
- Renamed methods of the `ToArray` trait
    - `removeFromRequestData(string $key): bool` -> `removeFromToArrayData(string $key): bool`
    - `covertToData(string $key, $value)` -> `convertToArrayData(string $key, $value)`
- Removed protected properties of ToArray trait in `toArray()` result.
- Renamed methods of the `FromArray` trait
    - `convertFromData(string $key, $value)` -> `convertFromArrayData(string $key, $value)`
    