<?php

namespace Data;

abstract class location{
    public string $name;
}

class city extends location {

}

class province extends location {

}

class Country extends location {
    
}