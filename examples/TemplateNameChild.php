<?php

use PhpDaddy\Contract\TemplateName\AbstractTemplateName;

class TemplateNameChild extends AbstractTemplateName
{
    protected function __construct()
    {
    }
}

$obj = TemplateNameChild::getInstance();
$anotherObj = TemplateNameChild::getInstance();
