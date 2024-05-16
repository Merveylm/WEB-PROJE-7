<?php

$host = "localhost";
$kullanici="root ";
$şifre="";
$vt="uyelik";

$baglanti=mysqli_connect($host ,$kullanici,$şifre,$vt);
mysqli_set_charset($baglanti,"UTF8");
if($baglanti){
    echo "bağlantı başarılı";
}
?>