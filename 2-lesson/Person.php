<?php

class Person{

    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }

    public function message_person(){
        echo $this -> full_data_person();
    }

    private function full_data_person(){
        return "\n\n\nВы обычный человек\nВаше имя: " . $this -> name . "\n" . "Ваш возраст: " . $this -> age . "\n\n\n\n";
    }

}

?>