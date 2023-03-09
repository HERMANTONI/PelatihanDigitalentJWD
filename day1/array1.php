<?php

arrayBuah = array("Mangga", "Apel", "Pisang", "Jeruk");

echo $arrayBuah[2];
echo "<br>";
echo $arrayBuah[0];
echo "<br>";

$arrayWarna = array();
$arrayWarna[0] = "Merah";
$arrayWarna[1] = "Biru";
$arrayWarna[2] = "Hijau";
$arrayWarna[3] = "Putih";

echo $arrayWarna[2];
echo "<br>";

foreach($arrayWarna as $nilai){
    echo $nilai. " ";
}

?>