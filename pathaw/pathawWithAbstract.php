<?php

abstract class Vehicle
{
    abstract public function getBaseFare();
    abstract public function getPerKiloFare();

    public function getTotal($kilo)
    {
        return $this->getBaseFare() + ($this->getPerKiloFare() * $kilo);
    }
}


class Car extends Vehicle
{

    public function getBaseFare()
    {
        return 100;
    }
    public function getPerKiloFare()
    {
        return 20;
    }
}

class Bike extends Vehicle
{

    public function getBaseFare()
    {
        return 80;
    }
    public function getPerKiloFare()
    {
        return 10;
    }
}




$car = new Car();
echo $car->getTotal(2);

echo "<br/>";

$bike = new Bike();
echo $bike->getTotal(2);
