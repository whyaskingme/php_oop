<?php

namespace Data\Traits;

trait SayGoodBye {
   public function goodBye (?string $name) : void{
    if (is_null($name)){
        echo"Good Bye" . PHP_EOL;
    } else {
        echo "Good bye $name" . PHP_EOL;
    }
   }
}

trait SayHello {
    public function Hello (?string $name) : void{
     if (is_null($name)){
         echo"Hello" . PHP_EOL;
     } else {
         echo "Hello $name" . PHP_EOL;
     }
    }
 }

 trait HasName {
    public string $name;
 }

 trait CanRun {
    public abstract function run() : void;
 }

class ParentPerson{
    public function Hello(?string $name): void
    {
        echo "hello in person" . PHP_EOL;
    }

    public function goodBye(?string $name): void
    {
        echo "goodbye in person" . PHP_EOL;
    }
}

trait All {
    use SayGoodBye, SayHello, HasName, CanRun;
}

 class Person extends ParentPerson {

    use All;
    use SayGoodBye, SayHello, HasName, CanRun;

    public function run(): void
    {
        echo  "person $this->name is running" . PHP_EOL;
    }
 }