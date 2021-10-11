<?php
use App\Bicycle;
use App\Car;
use App\Truck;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR .'Vehicule.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR.'Bicycle.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR .'Car.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR .'Truck.php';

$bike = new Bicycle('blue', 1);
echo $bike->forward();
var_dump($bike);


$car = new Car('red', 5, "water");
echo $car->forward();
var_dump($car);

$truck = new Truck('yellow', 2, 'fuel', 15);
echo $truck->forward();

var_dump($truck);