# PUBMS API Client Library for PHP #

## Requirements ##

* [PHP 5.4.0 or higher](http://www.php.net/)

## Installation ##

```sh
composer require pubms/pubms-api-php-client:dev-master
```
```php
require_once '/path/to/your-project/vendor/autoload.php';
```

### Basic Example ###

```php
require_once 'vendor/autoload.php';

$client = new Pubms_Client();

echo $client->getVersion();
```
