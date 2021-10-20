<?php

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

require_once 'Truck.php';

$truck = new Truck('red',2,'fuel');
echo $truck->forward();
$truck->setLoading=5;
echo $truck->inFilling();
var_dump($truck);



require_once 'Skateboard.php';

$skateboard = new Skateboard('pink',1);
echo $skateboard->forward();
var_dump($skateboard);

require_once 'PedestrianWay.php';

$pedestrian = new PedestrianWay();
$pedestrian->setCurrentVehicles((array)$bicycle);
$pedestrian->setCurrentVehicles((array)$car);

var_dump($pedestrian);

require_once 'ResidentialWay.php';

$residential = new ResidentialWay();
$residential->setCurrentVehicles((array)$car);
$residential->setCurrentVehicles((array)$skateboard);

var_dump($residential);

require_once 'MotorWay.php';

$motorway = new MotorWay();
$motorway->setCurrentVehicles((array)$car);
$motorway->setCurrentVehicles((array)$bicycle);

var_dump($motorway);
?>

