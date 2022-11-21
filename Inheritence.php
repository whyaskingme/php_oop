<?php

require_once "Data/Manager.php";

$manager = new Manager;
$manager->name = "udin";
$manager->sayHello("joko");

$vp = new VicePresident;
$vp->name = "eko";
$vp->sayHello("hoho");