<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

require "exercise_1_classes.php";

class Beer extends Beverage{
    //properties
    private const BARNAME = "Het Vervolg";
    private string $name;
    private float $alcoholPercentage;
    
    //constructor
    public function __construct (string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold')
    {
        $this->alcoholPercentage = $alcoholPercentage;
        $this->name = $name;
        parent::__construct($color, $price, $temperature);
    }

    public function printBarname ()
    {
        echo "bar name" . SELF::BARNAME;
    }

    //function
    public function getAlcoholPercentage () : string
    {
        return "$this->alcoholPercentage %";
    }
}

$b2 = new Beer("blond", 3.5, "Duvel", 8.5);
$b2->getInfo();

echo $b2->getAlcoholPercentage();
echo ($b2->alcoholPercentage . " %");