<?php

    include("baglanti.php");

    if(isset($_POST["giris_yap"]))
    {

      $tc =$_POST["kullanici_tc"];
      $password = sha1(md5(($_POST["kullanici_password"])));
  
      
    $kontrol =  $baglanti ->prepare("SELECT * FROM kullanici WHERE kullanici_tc = ? AND kullanici_password = ?");
    $kontrol -> execute([$tc,$password]);

    $kayitsay = $kontrol -> rowCount();

    if($kayitsay > 0){

        echo "<script> alert('Hoş Geldiniz..')</script>";
        header("location: anasayfa.php");
    }

    elseif(empty($tc) || empty($password)){

        echo"<h1>Kullanıcı Adı Veya Şifre Boş Bırakılamaz!!</h1>";
    }

    else{

        echo "<h1>KAYIT BULUNAMADI!!</h1>";
    }

    }


?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>diş kliniği</title>
</head>
<body>
     <header>
        <h1> KABLAN DİŞ KLİNİĞİ</H1>
    </header>

    <div class="tableOuter">
        <h1>Giriş Yap</H1>
    <form action="" method="POST">
        <div class="user">
         <input type= "text" name ="kullanici_tc" placeholder = "Tc Kimlik No" >
        </div>
            <div class="pass">
            <input type = "password" name= "kullanici_password" placeholder= "sifre">
            </div>
            <button type="submit" class="sub" id= "giris" name="giris_yap">Giriş Yapın </button>
            <br>
     </form>
        <a href="uye.php"><button type="submit" class="sub" id="uye"> Üye Olun</button></a>
   </div>

</body>
</html>