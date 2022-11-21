<?php

class Person {

    const AUTHOR = "NAGATAH.M";

    var string $name;
    var ?string $address = null;
    var string $country = "Kamboja";

    function __construct(string $name, ?string $address)
    {
        $this->name = $address;
        $this->address = $address;
    }


    function sayHello(?string $name){
       if(is_null($name)){
            echo "Hi, My name is $this->name".PHP_EOL ;    
       }else{
            echo "Hi $name, my name is $this->name". PHP_EOL ;
       } 
    }

    function info(){
        echo "Author : " . self::AUTHOR. PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }

}