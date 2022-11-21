<?php

require_once "Data/Person.php";

$person = new Person("Nagatah", "Jakarta");
$person->name = "Nagatah";
$person->address = "Jakarta";
$person->country = "Indonesia";


var_dump($person);

echo "Nama : $person->name" . PHP_EOL;
echo "Alamat : $person->address" . PHP_EOL;
echo "Negara : $person->country" . PHP_EOL . PHP_EOL;

$person2 = new Person("Ucup", "India");
$person2->name = "Ucup";
$person2->address = null;

echo "Nama : $person2->name" . PHP_EOL;
echo "Alamat : $person2->address" . PHP_EOL;
echo "Negara : $person2->country" . PHP_EOL;

 