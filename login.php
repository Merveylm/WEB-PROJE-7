<?php

include("baglanti.php");

İF(isset($_POST["kaydet"])){
    
    $name=$_POST["kullanici"];
    $password=$_POST["şifre"];

    $ekle="INSERT INTO  kullanicilar(lullanici_adi,şifre) VALUES ('$name','$password')";

    $calistirekle=msqli_query($baglanti,$ekle);
    if($calistirekle){
        echo "<div class="alert alert-danger" role="alert">
        KAYIT BAŞARILI BİR ŞEKİLDE EKLENDİ
      </div>"
    }else{
        echo"<div class="alert alert-danger" role="alert">
        KAYIT İŞLEMİ BAŞARISIZ SONÇLANDI 
      </div>"
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG İN </title>
</head>
<body>
<div id="ilksayfa1">
    <div id="kisimlar">
      <ul>
       <li> <a href="anasayfa.html">ANASAYFA</a></li>
       <li><a href="hakkımda.html"> HAKKIMDA </a></li>
       <li> <a href="egitim-bilgilerim.html">EĞİTİM BİLGİLERİM</a></li>
       <li><a href="yaşadığım-şehir.html"> YAŞADIĞIM ŞEHİR </a></li>
       <li> <a href="mirasımız.html"> MİRASIMIZ </a></li>
       <li> <a href="ilgi-alanlarim.html"> İLGİ ALANLARIM </a></li>
       <li> <a href="iletişim.html"> İLETİŞİM </a></li>
        <li>   <a href="login.html" > LOG İN </a>  </li>
      </ul>
     </div>
   </div><
<div class="wrapper">
        <div class="form ">
            <h3 class="head1"> KULLANICI GİRİŞİ</h3>
            <form action="baglanti.php" method="post">
                <input type="text" id="kullanici" name="kullanici" placeholder=" Kullanıcı Adınız "required >
                <img src="person-circle.svg" alt="kullanıcıicon" width="25px"><br><br>
                <input type="password" id="şifre" name="şifre" placeholder=" Şifreniz "  required >
                <img src="lock-fill.svg" alt="şifreicon" width="25px"><br><br><br>
                 <button class="buton"> GİRİŞ YAP </button>
            </form>
    
         </div>
    </div> 
</body>
</html>
