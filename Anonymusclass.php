<?php

interface HelloWorld
{
    function SayHello():void;
}

$Helloworld = new class implements HelloWorld{
    public function SayHello(): void
    {
        echo "Hello World" . PHP_EOL;
    }
};
$Helloworld->SayHello();