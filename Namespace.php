<?php

namespace {

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

$conflict1 = new \data\one\Conflict();
$conflict2 = new \data\two\conflict();

echo Helper\Application. PHP_EOL;

Helper\helpme();
}