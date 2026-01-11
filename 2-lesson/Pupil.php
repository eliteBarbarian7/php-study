<?php

include("Person.php");

class Pupil extends Person{
    
    //public function __construct($numberClass){
    //    $this -> numberClass = $numberClass;
    //}

    //public function mssage_pupil() {
    //    echo $this -> full_data_pupil();
    //}

    public function message_pupil($numberClass) {
        echo "\n\n\nВы ученик\nВаш класс: " . $numberClass . "\nВаше имя: " . $this -> name . "\nВаш возраст: " . $this -> age . "\n\n\n\n";
    }

}

?>