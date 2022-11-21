<?php

require_once "Data/Manager.php";

$manager=new Manager();
$manager->name = "budi";
$manager->sayHello("Joko");

$Vp=new VicePresident();
$Vp->name = "NGT";
$Vp->sayHello("hehe");