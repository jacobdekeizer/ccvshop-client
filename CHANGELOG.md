# Change log

## v0.12.0

- Moved generator code to own namespace
- Removed onlyFilledProperties parameter from endpoints and added `onlyFilledPropertiesInToArrayData(false)` to the ToArray trait.
- Renamed protected methods of ToArray
    - `removeFromRequestData(string $key): bool` -> `removeFromToArrayData(string $key): bool`
    - `covertToData(string $key, $value)` -> `convertToArrayData(string $key, $value)`
- Removed protected properties of ToArray trait in `toArray()` result.
- 