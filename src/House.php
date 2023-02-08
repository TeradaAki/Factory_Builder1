<?php

namespace App;

abstract class House 
{
    protected $door;
    protected $windows;
    protected $walls;
    protected $roof;
    protected $foundation;

}

class HouseGarden extends House
{

}

class HouseGarage extends House
{

}

class HouseSwimmingPool extends House
{

}

class HouseStatues extends House
{

}