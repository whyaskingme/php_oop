<?php

require_once "Data/SayGoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Joko");
$person->Hello("budi");

$person->name = "elp";
var_dump($person); 

$person->run();