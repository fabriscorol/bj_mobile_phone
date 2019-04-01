# bj_phone_number

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

A minimal module to validate Beninese mobile phone numbers. Inspired by [nioperas06][link-to-inspired] Python project

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require fabriscorol/bj_phone_number
```

## Usage

``` php
$validator = new fabriscorol\BjPhoneNumber();
echo $validator->validateNumber(97970001);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email fabrice@tohionon.net instead of using the issue tracker.

## Credits

- [Fabrice TOHIONON][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/fabriscorol/bj_phone_number.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fabriscorol/bj_phone_number.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/fabriscorol/bj_phone_number
[link-downloads]: https://packagist.org/packages/fabriscorol/bj_phone_number
[link-author]: https://github.com/fabriscorol
[link-contributors]: ../../contributors
[link-to-inspired]: https://github.com/nioperas06/bj_phone_number
