<?php

include("sum.php");

$spisokChisel = [];
while (count($spisokChisel) < 10){
    echo "Введите число: ";
    $chislo = readline();
    $spisokChisel[count($spisokChisel)] = $chislo;
}

print_r ($spisokChisel);

$itog = getSum($spisokChisel);

echo "Сумма чисел: $itog[0] \n";
echo "Кол-во чётных чисел: $itog[1] \n"


?>