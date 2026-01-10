<?php
    function sum($numbers){
        $counter = 0;
        $counterNotChetnie = 0;
        $counterChetnie = 0;
        $sum = 0;

        while($counter < count($numbers)){

            if ($numbers[$counter] % 2 != 0) {
                $counter += 1;
                $counterNotChetnie += 1;
                continue;
            }

            $sum += $numbers[$counter];
            $counter += 1;
            $counterChetnie +=1;
        }


        return $itog = [$sum, $counterChetnie, $counterNotChetnie];
    }
?>