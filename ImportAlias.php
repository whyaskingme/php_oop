<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\one\Conflict as Conflict1;
use data\two\conflict as Conflict2;
use function Helper\helpme as help;
use const Helper\Application as APP;

$conflict11 = new Conflict1();
$conflict12 = new Conflict2();

help();

echo APP. PHP_EOL;
 