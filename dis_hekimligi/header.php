<?php
   ob_start();
   session_start();
   include 'baglan.php';
   



?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Diş kliniği</title>
</head>
<body>
    <div class="ust_bar">
    <a href="anasayfa.php"><h1>Özel Diş Klinigi</h1></a>
    <div class="menu">
    <a href="hesap.php" > <h5>Hesap Bilgileri</h5></a>
    <a href="randevu.php" > <h5>Randevu Bilgileri</h5></a>
    
  </div>
   </div>
   
   <a href ="logaut.php"><div class="cikis">
    Çıkış Yapın
</div></a>
</body>
</html>