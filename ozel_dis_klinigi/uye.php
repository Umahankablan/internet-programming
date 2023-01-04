<?php
  include("baglanti.php");

  if(isset($_POST["kullanicikaydet"]))
  {
    $name=$_POST["kullanici_adsoyad"];
    $tc =$_POST["kullanici_tc"];
    $password = sha1(md5(($_POST["kullanici_password"])));

    $sql = "INSERT INTO kullanici (kullanici_adsoyad, kullanici_tc, kullanici_password) VALUES(?,?,?)";
    $baglanti
    ->prepare($sql)
    ->execute([$name,$tc,$password]);

    echo "<h1>KAYIT BAŞARILI</h1>";
    header("location:uye.php");
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
        <h1> ÖZEL DİŞ KLİNİĞİ</H1>
    </header>

    <div class="tableOuter">
        <h1>üye Ol</h1>
    <form action="uye.php" method="POST">
        <div class="user">
          <input type= "text"name ="kullanici_adsoyad" placeholder = "Ad Soyad" > 
          </div>
        <div class="user">
         <input type= "text"name="kullanici_tc" placeholder = "Tc Kimlik No" >
        </div>
            <div class="pass">
            <input type="password" name= "kullanici_password" placeholder= "Sifre">
            </div>
            <button type="submit" class="sub" id= "giris" name="kullanicikaydet">üye ol</button>
            <br>
     </form>
      <a href="index.php"><button type="submit" class="sub" id="uye">Geri Çık</button></a>
   </div>

</body>
</html>

