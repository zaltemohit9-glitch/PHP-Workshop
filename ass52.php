<?php

class Vehicle {
    protected $isPrivateCar;
    public $type;

    public function __construct($isPrivateCar, $type) {
        $this->isPrivateCar = $isPrivateCar;
        $this->type = $type;
    }

    public function showType() {
        echo "Vehicle Type: " . $this->type . "<br>";
    }
}

class ElectricVehicle extends Vehicle {
    
    public function changeTypeToElectric() {
        $this->type = "Electric Car";
        echo "Type changed to Electric Car!<br>";
    }
    
    public function showType() {
        echo "Updated Vehicle Type: " . $this->type . "<br>";
    }
}

$ev = new ElectricVehicle(true, "Car");
echo "Before: ";
$ev->showType();
$ev->changeTypeToElectric();
echo "After: ";
$ev->showType();
echo "Direct access: " . $ev->type;

?>


