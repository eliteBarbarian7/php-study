<?php
include("sumChetnie.php");

$chisla = [1,4,3,5,6,2,1,3,4,3];

$itog = sum($chisla);

echo "Сумма чётных чисел: $itog[0]\n";
echo "Количество чётных чисел: $itog[1]\n";
echo "Количество нечётных чисел: $itog[2]\n";
?>