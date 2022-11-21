<?php

class Programmer {

    public string $name;
    public function __construct(string $name)
    {
        $this -> name = $name;
    }
}

class BackendProgrammer extends Programmer{

}

class FronedProgrammer extends Programmer {

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer (Programmer $programmer){
    echo "Hello Programmer $programmer->name" . PHP_EOL;
    if ($programmer instanceof BackendProgrammer){
        echo "Hello Back end Programmer $programmer->name". PHP_EOL;

    } else if ($programmer instanceof FronedProgrammer){
        echo "Hello Front end Programmer $programmer->name" . PHP_EOL;

    } else if ($programmer instanceof Programmer){
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    } 

}