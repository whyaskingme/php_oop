<?php

namespace Data;

abstract class Animal
{
    public string $name;

    abstract public function run() : void;
}
class Cat extends Animal{

    public function run() : void
    {
        echo "cat $this->name is running" . PHP_EOL;
    }
}

class Doge extends Animal {

    public function run(): void
    {
        echo "Doge $this->name is running" . PHP_EOL;
    }
}