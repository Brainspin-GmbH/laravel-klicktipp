# A laravel wrapper for the Klicktipp API

This package is a laravel wrapper for the [Klicktipp API](https://support.klicktipp.com/article/389-application-programming-interface-api).

```php
$response = Klicktipp::subscribe($email);
```

## Configuration

You need to provide these credentials in your .env:
```php
KLICKTIPP_USERNAME=
KLICKTIPP_DEVELOPER_KEY=
KLICKTIPP_CUSTOMER_KEY=
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.