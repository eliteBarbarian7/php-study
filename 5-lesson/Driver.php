<?php
include("Person.php");

class Driver extends Person{

    public function __construct($name, $age, $car){
        parent::__construct($name, $age);
        $this -> car = $car;
    }

    public function driver_data(){
        echo $this -> full_driver_data();
    }

    private function full_driver_data(){
        return $this -> full_data() . "Ваша машина: " . $this -> car . "\n";
    }
}

?>