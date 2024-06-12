## Installation

You can install the package via composer:

```bash
composer require bataboom/quotesbb
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="quotesbb-config"
```

This is the contents of the published config file:

```php
return [
    'all' => public_path('bataboom/quotesbb').'/data.json',
    'delay' => '5000ms',
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="quotesbb-views"
```

## Usage

```php
<livewire:flash-quotes />
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [BataBoom](https://github.com/BataBoom)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
