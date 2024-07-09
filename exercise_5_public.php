<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
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
	
	//function
	public function getInfo() : string 
	{
		return "This beverage is $this->temperature and $this->color.";
	}
}

$b1 = new Beverage("black", 2.00);
echo $b1->getInfo();
var_dump($b1);
$b1->__construct("black", 3.5);
var_dump($b1);