<?php

include("Person.php");

class Pupil extends Person{
    
    public function __construct($numberClass, $name, $age){
        $this -> numberClass = $numberClass;
        $this -> name = $name;
        $this -> age = $age;
    }

    public function message_pupil(){
        echo $this -> full_data_pupil();
    }

    private function full_data_pupil() {
        return "\n\n\nВы ученик\nВаш класс: " . $this -> numberClass . "\nВаше имя: " . $this -> name . "\nВаш возраст: " . $this -> age . "\n\n\n\n";
    }

}

?>