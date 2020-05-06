<?php

/* Your Car one is probably a bit over-engineered.
The user of the class can't create a Car without passing in values for make and numberplate, so the null checks on those are unnecessary.
You also don't really need the journey property - just update mileage with the value directly.
There's also a price property that you haven't declared, then set to null in the __construct but then never do anything with.
*/

declare(strict_types=1);

class Car
{
    private $make;
    private $numberPlate;
    private $mileage = 0;

    public function __construct(string $make, string $numberPlate)
    {
        $this->make = $make;
        $this->numberPlate = $numberPlate;
    }

    public function addJourney(int $value): object
    {
        $this->mileage += $value; // Add journey to total mileage
        return $this;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }
    public function getNumberPlate(): string
    {
        return $this->numberPlate;
    }
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"

var_dump($car->getMileage()); // int(0)

// you can add journey


$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)
