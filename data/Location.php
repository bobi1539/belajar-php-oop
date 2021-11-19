<?php 

namespace Data;

abstract class Location{
    public string $name;
}

class Country extends Location{

}

class City extends Location{}