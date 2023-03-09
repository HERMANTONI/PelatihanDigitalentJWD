<?php
$db_host="localhost"; //kalo database beda pc/beda server dengan php langsung alamat ip
$db_user="root";
$db_pass="";
$db_name="perpustakaan";

$koneksi = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (mysqli_connect_error()){
    echo "akses error";
}
?>