<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

	//properties
	private string $color;
	private float $price;
	private string $temperature;

	//constructor
	public function __construct (string $color, float $price, string $temperature = 'cold')
	{
		$this->color = $color;
		$this->price = $price;
		$this->temperature = $temperature;
	}

    //getter
    public function getColor() : string
    {
        return $this->color;
    }
    public function getPrice() : float
    {
        return $this->price;
    }
    public function getTemperature() : string
    {
        return $this->temperature;  
    }
	
    //setter
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    public function setPrice(float $price) : void
    {
        $this->price = $price;
    }
    public function setTemperature(string $temperature) : void
    {
        $this->temperature = $temperature;
    }
	//function
	public function getInfo() : string 
	{
		return "This beverage is $this->temperature and $this->color.";
	}
}

class Beer extends Beverage{
    //properties
    private string $name;
    private float $alcoholPercentage;
    
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
