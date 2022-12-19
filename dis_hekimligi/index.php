<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "stylee.css">
    <title>diş kliniği</title>
</head>
<body>
     <header>
        <h1> ÖZEL DİŞ KLİNİĞİ</H1>
    </header>

    <div class="tableOuter">
        <h1>Giriş Yap</H1>
    <form action="islem.php" methot="post">
        <div class="user">
         <input type= "text" name ="kullanici_tc" placeholder = "Tc Kimlik No" >
        </div>
            <div class="pass">
            <input type = "password" name= "kullanici_password" pleceholder= "sifre">
            </div>
            <button type="submit" class="sub" id= "giris" name="giris_yap">Giriş Yapın </button>
            <br>
     </form>
        <a href="uye.php"><button type="submit" class="sub" id="uye"> Üye Olun</button></a>
   </div>

</body>
</html>