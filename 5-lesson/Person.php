<?php

abstract class Person{

    public function __construct($name,$age){
        $this -> name = $name;
        $this -> age = $age;
    }

    protected function full_data(){
        return "Ваше имя: " . $this -> name . "\nВаш возраст: " . $this -> age . "\n";
    }
}
?>