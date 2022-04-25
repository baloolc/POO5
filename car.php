<?php
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface

{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private string $energy;


    private int $energyLevel;
    


    public function __construct(string $color, int $nbSeats, string $energy, int $nbWheels)

    {

        parent::__construct($color, $nbSeats, $nbWheels);

        $this->energy = $energy;

    }

    public function switchOn(): bool
    {
        return true;
    }
    
    public function switchOff(): bool
    {
    
            return false;
        
    }

    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Car

{

    if (in_array($energy, self::ALLOWED_ENERGIES)) {

        $this->energy = $energy;

    }

    return $this;

}


    public function getEnergyLevel(): int

    {

        return $this->energyLevel;

    }


    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;

    }

 
    


}