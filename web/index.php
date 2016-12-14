<?php

require __DIR__.'/../vendor/autoload.php';

use Legattd\Library\TestClass;

$var = new TestClass();

$var->setName('David');

echo $var->getName();