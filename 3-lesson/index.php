<?php

$person = [
    "i_am" => [
        "name" => "Daniel", 
        "age" => 19, 
        "hobby" => "football", 
        "isMarried" => false
        ],
    "she_is" => [
        "name" => "Maria",
        "age" => 42,
        "hobby" => "basketball",
        "isMarried" => false
    ]
    ];

$person["he_is"]["name"] = "Victor";
$person["he_is"]["age"] = 48;

$person["he_is"]["hobby"] = "hockey";
$person["he_is"]["isMarried"] = true;

$person["she_is"]["isMarried"] = true;

print_r ($person["he_is"]["hobby"] . "\n\n");



foreach ($person as $i) {
    if ($i["isMarried"] == true){
        print_r($i["name"] . "\n");
    }
}

echo "\n\n";



$animals = ["dog", "cat", "parrot", "owl", "pig", "rabbit"];

foreach ($animals as $key => $item){
    echo $key . ": ";
    echo $item . "\n";
}



for ($i = 0; $i<count($animals);$i++){
    if ($animals[$i] == "cat"){
        continue;
    }
    elseif ($animals[$i] == "pig"){
        break;
    }

    echo $animals[$i] . "\n";
}

echo "\n";

$name2 = "daniil";
$age2 = "19";



// ==
// === "СТРОГОЕ СРАВНЕНИЕ"(если хотим чтобы интерпритатор при сравнении обращал внимание на тип данных)
// && and
// || or
// !
// > < >= <=

if ($name2 == "daniil" && !($age2 === 19)){
    echo "Условие истинно";
}
else{
    echo "Условие ложно";
}

//echo "\n";
//
//
//
//$name = "Victor";
//$age = 20;
//$hobby = "swimming";
//$isMarried = true;
//
//echo "$name $age $hobby $isMarried";

?>