<?php

require_once "Data/Animal.php";

use Data\{Animal, Cat, Doge};

$cat = new Cat();
$cat->name = "Ucup";
$cat->run();

$doge = new Doge();
$doge->name = "eko";
$doge->run();

