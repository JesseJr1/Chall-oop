<?php
// index.php

require_once 'car.php';




require_once ('truck.php');
$amazon = new Truck('red', 2, 'electric', 50);
$amazon->setLoading(50);
echo $amazon->fillingTruck();

echo $amazon->start();
$amazon->setCurrentSpeed(80);
echo $amazon->forward();
echo $amazon->brake();


$amazon->setLoading(40);
echo $amazon->fillingTruck();

echo $amazon->start();
$amazon->setCurrentSpeed(80);
echo $amazon->forward();
echo $amazon->brake();


// // Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
// echo $bike->brake() . '<br>';

// echo '<br>';

// // Moving car
// echo $car->forward() . '<br>';
// $car->setCurrentSpeed(70) . '<br>';
// echo $car->brake();


