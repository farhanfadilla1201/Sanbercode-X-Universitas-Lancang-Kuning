<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$object = new animal("shaun");

echo "name : " . $object->name . "<br>";
echo "legs : " . $object->legs . "<br>";
echo "cold blooded : " . $object->cold_blooded . "<br> <br>";

$kodok = new frog("buduk");

echo "name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "cold blooded : " . $kodok->cold_blooded . "<br>";
$kodok->jump();

$sungokong = new ape("kera sakti");

echo "<br><br>name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
$sungokong->yell();

?>
