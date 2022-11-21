<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("eko");
var_dump($company);

$company->programmer = new BackendProgrammer("Wahyu");
var_dump($company);

$company->programmer = new FronedProgrammer("Saha");
var_dump($company);

sayHelloProgrammer(new Programmer("eko"));
sayHelloProgrammer(new BackendProgrammer("Eko"));
sayHelloProgrammer(new FronedProgrammer("Eko"));
