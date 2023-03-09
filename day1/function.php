<?php
function perkalian($angka1, $angka2){
    $hasil = $angka1 * $angka2;
    return $hasil;
}

$hasil = perkalian(4,7);
echo "Perkalian 4 x 5 adalah $hasil"; echo"<br>";
echo "Perkalian 7 x 8 adalah ". perkalian(7,8);

?>