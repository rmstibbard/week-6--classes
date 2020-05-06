<?php

declare(strict_types=1);

class Car
{
    private $make;
    private $numberPlate;
    private $mileage;
    private $journey;

    public function __construct(string $make, string $numberPlate)
    {
        $this->make = $make;
        $this->numberPlate = $numberPlate;
        $this->price = null;
        $this->mileage = null;
        $this->journey = null;
    }

    public function setMileage($value): void
    {
        $this->mileage = $value;
    }

    public function addJourney($value): void
    {
        $this->journey = $value;
        $this->mileage = $this->mileage + $this->journey; // Add journey to total mileage
    }

    public function getMake()
    {
        return ($this->make === null) ? 0 : $this->make;
    }

    public function getMileage()
    {
        return ($this->mileage === null) ? 0 : $this->mileage;
    }
    public function getNumberPlate()
    {
        return ($this->numberPlate === null) ? "Unknown" : $this->numberPlate;
    }
    public function getJourney()
    {
        return ($this->journey === null) ? 0 : $this->journey;
    }
}


// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");
$car->setMileage(30000);

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"

var_dump($car->getMileage()); // int(0)

// you can add journey


$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)


// A second car =================

$car2 = new Car("Nissan", "W123 WER");
$car2->setMileage(120000);

var_dump($car2->getNumberplate());
var_dump($car2->getMake());

var_dump($car2->getMileage());

$car2->addJourney(300);
var_dump($car2->getMileage());
