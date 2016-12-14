<?php

require __DIR__.'/../vendor/autoload.php';

use Legattd\Library\TestClass;

$var = new TestClass();

$var->setName('David');
$var->setEmail("legattd@ncbpinc.com");

echo $var->getName();
echo "\n";
echo $var->getEmail();