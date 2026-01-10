<?php
include("Person.php");
$name = readline();
$age = readline();

$chelovek = new Person($name, $age);
$chelovek -> soobshenie();
?>