<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/

require "exercise_1_classes.php";

class Beer extends Beverage{
    //properties
    protected string $name;
    protected float $alcoholPercentage;
    
    //constructor
    public function __construct (string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold')
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }

    //getter
    public function getName() : string
    {
        return $this->name;
    }
    public function getAlcoholPercentage () : float
    {
        return $this->alcoholPercentage;
    }

    //setter
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    public function setAlcoholPercentage(float $alcohol) : void
    {
        $this->alcoholPercentage = $alcohol;
    }

    //function
    private function beerInfo() : string
    {
        return "Hi i'm {$this->name} and have an alcochol percentage of {$this->alcoholPercentage} and I have a {$this->color}.";
    }
}
$b2 = new Beer("blond", 3.5, "Duvel", 8.5);
$b2->setcolor('light brown');
var_dump($b2);
// echo $b2->getInfo();

// echo "{$b2->getAlcoholPercentage()} %";
// echo $b2->beerInfo();