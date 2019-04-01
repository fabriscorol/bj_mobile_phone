# bj_phone_number

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A minimal module to validate Beninese mobile phone numbers.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
config/
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
$skeleton = new fabriscorol\bj_phone_number();
echo $skeleton->echoPhrase('Hello, League!');
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
[ico-travis]: https://img.shields.io/travis/fabriscorol/bj_phone_number/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/fabriscorol/bj_phone_number.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/fabriscorol/bj_phone_number.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fabriscorol/bj_phone_number.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/fabriscorol/bj_phone_number
[link-travis]: https://travis-ci.org/fabriscorol/bj_phone_number
[link-scrutinizer]: https://scrutinizer-ci.com/g/fabriscorol/bj_phone_number/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/fabriscorol/bj_phone_number
[link-downloads]: https://packagist.org/packages/fabriscorol/bj_phone_number
[link-author]: https://github.com/fabriscorol
[link-contributors]: ../../contributors
