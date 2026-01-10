<?php

class Person{

    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }

    public function soobshenie(){
        echo $this -> full_name();
    }

    private function full_name(){
        return "Ваше имя: " . $this -> name . "\n" . "Ваш возраст: " . $this -> age;
    }

}

?>