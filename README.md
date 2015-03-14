# Singleton Contract (Interface)

[![Build Status](https://travis-ci.org/php-daddy/contract-singleton.svg?branch=master)](https://travis-ci.org/php-daddy/contract-singleton)

```php
<?php

use PhpDaddy\Contract\Singleton\AbstractSingleton;

class SingletonChild extends AbstractSingleton
{
}

$obj = new SingletonChild::getInstance();

```

See `example` directory.
