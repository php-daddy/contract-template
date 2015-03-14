<?php

use PhpDaddy\Contract\Singleton\AbstractSingleton;

class SingletonChild extends AbstractSingleton
{
    protected function __construct()
    {
    }
}

$obj = SingletonChild::getInstance();
$anotherObj = SingletonChild::getInstance();
