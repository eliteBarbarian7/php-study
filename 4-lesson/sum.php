<?php

function getSum($spisokChisel){
    $sum = 0;
    $kolvoChetnih = 0;
    $itog = [];

    foreach ($spisokChisel as $item){
        $sum += $item;

        if ($item % 2 == 0){
            $kolvoChetnih += 1;
        }
    }

    return $itog = [$sum, $kolvoChetnih];
}

?>