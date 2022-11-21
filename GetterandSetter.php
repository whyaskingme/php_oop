<?php

require_once "Data/Category.php";

$category = new Category;
$category->setName("Handphone");
$category->setExpensive(true);


$category->setName("             ");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expesive : {$category->isExpensive()}" . PHP_EOL;