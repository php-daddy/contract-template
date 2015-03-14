# Singleton Contract (Interface)

```php
<?php

use PhpDaddy\Contract\Singleton\AbstractSingleton;

class SingletonChild extends AbstractSingleton
{
}

$obj = new SingletonChild::getInstance();

```

See `example` directory.
