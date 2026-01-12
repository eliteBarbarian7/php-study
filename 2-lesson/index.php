<?php

include("Pupil.php");

while(true){

    echo "Выберете действие:\n";
    echo "1 - Стать обычным человеком\n";
    echo "2 - Стать учеником\n";
    echo "3 - Выйти из программы\n";
    echo "Ваш выбор: ";
    $otvet = readline();

    if ($otvet == 1) {
        echo "Вы обычный человек, введите свои данные:\n";
        echo "Имя: ";
        $name = readline();
        echo "Возраст: ";
        $age = readline();

        $personObject = new Person($name, $age);
        $personObject -> message_person();
    }
    elseif ($otvet == 2) {
        echo "Вы ученик, введите свои данные:\n";
        echo "Класс: ";
        $numberClass = readline();
        echo "Имя: ";
        $name = readline();
        echo "Возраст: ";
        $age = readline();

        $pupilObject = new Pupil($numberClass,$name, $age);
        $pupilObject -> message_pupil();
    }
    elseif ($otvet == 3) {
        echo "ВЫ ВЫШЛИ ИЗ ПРОГРАММЫ";
        break;
    }
    else {
        echo "Вы ввели неизвестные данные!\n\n";
    }

}

?>