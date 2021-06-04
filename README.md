# mohatt/package-skeleton-php

[![Latest Version][packagist-img]][packagist-url]
[![Build Status][ci-img]][ci-url]
[![Coverage Status][codecov-img]][codecov-url]
[![PHP Version][php-img]][php-url]
[![License][license-img]][license-url]
[![Total Downloads][downloads-img]][packagist-url]

 > This repository can be used to scaffold a composer package. Click the "Use template" button at the top of this repo to create a new repo with the contents of this skeleton. Have fun creating your package!

This is where your description should go. Try and limit it to a paragraph or two.

## Installation

The preferred method of installation is via [Composer](http://getcomposer.org/). Run the following
command to install the package and add it as a requirement to your project's
`composer.json`:

```bash
composer require mohatt/package-skeleton-php
```


## Usage

```php
$skeleton = new Mohatt\Skeleton\Hello();
echo $skeleton->getHello();
```

## Composer scripts

```bash
# Lint PHP source without making any changes
composer lint

# Lint and fix code style issues
composer lint:fix

# Run tests
composer test

# Run tests with coverage
composer test:coverage
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Contributions are welcome! Please read [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

[MIT][license-url]


[packagist-url]: https://packagist.org/packages/mohatt/package-skeleton-php
[packagist-img]: https://img.shields.io/packagist/v/mohatt/package-skeleton-php.svg?logo=packagist&logoColor=white
[ci-url]: https://github.com/mohatt/package-skeleton-php/actions/workflows/main.yml
[ci-img]: https://img.shields.io/github/workflow/status/mohatt/package-skeleton-php/CI/master?logo=github
[codecov-url]: https://codecov.io/github/mohatt/package-skeleton-php
[codecov-img]: https://img.shields.io/codecov/c/github/mohatt/package-skeleton-php.svg?logo=codecov&logoColor=white
[downloads-img]: https://img.shields.io/packagist/dt/mohatt/package-skeleton-php.svg?logo=iCloud&logoColor=white
[php-url]: https://www.php.net
[php-img]: https://img.shields.io/packagist/php-v/mohatt/package-skeleton-php.svg?logo=php&logoColor=white
[license-url]: https://github.com/mohatt/package-skeleton-php/blob/master/LICENSE
[license-img]: https://img.shields.io/github/license/mohatt/package-skeleton-php.svg?logo=open%20source%20initiative&logoColor=white

