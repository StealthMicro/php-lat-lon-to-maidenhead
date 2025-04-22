# Convert Latitude/Longitude to Maidenhead / GridSquare

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stealthmicro/php-lat-lon-to-maidenhead.svg?style=flat-square)](https://packagist.org/packages/stealthmicro/php-lat-lon-to-maidenhead)
[![Tests](https://img.shields.io/github/actions/workflow/status/stealthmicro/php-lat-lon-to-maidenhead/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/stealthmicro/php-lat-lon-to-maidenhead/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/stealthmicro/php-lat-lon-to-maidenhead.svg?style=flat-square)](https://packagist.org/packages/stealthmicro/php-lat-lon-to-maidenhead)

Convert Latitude/Longitude to Maidenhead / GridSquare

## Installation

You can install the package via composer:

```bash
composer require stealthmicro/php-lat-lon-to-maidenhead
```

## Usage

```php
$maidenhead = Stealthmicro\LatLonToMaidenhead::convert('51.5074', '-0.1278');
```

## Testing

```bash
composer test
```

## Credits

- [Robert Mann](https://github.com/StealthMicro)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
