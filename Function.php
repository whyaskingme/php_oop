<?php

require_once "Data/Person.php";

$ngt = new Person("Budi", "ucup"); 
$ngt->name = "Budi"; 
$ngt->sayHello("Ucup");

$joko = new Person("Don","ads");
$joko->name="Don";
$joko->sayHello(null);

$joko->info();