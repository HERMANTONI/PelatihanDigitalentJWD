<?php
//buat session
session_start();
$user = "admin";
$_SESSION['login'] = $user;

//periksa session
if (isset($_SESSION['login'])){
    echo "Selamat datang ".$_SESSION['login'];
}

//hapus session
unset($_SESSION);
session_destroy();

?>