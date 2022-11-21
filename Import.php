<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\one\Conflict;
use function Helper\helpme;
use const Helper\Application;

$conflict11 = new Conflict();
$conflict12 = new Data\two\conflict();

helpme();

echo Application. PHP_EOL;
 