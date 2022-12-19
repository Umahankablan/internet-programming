<?php

include 'header.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Diş Kliniği</title>
</head>
<body>
    <div class="adsoyad">
        <h4>Sn.<?php echo $kullanicicek['kullanici_adsoyad'];?> </h4>
</div>
<div class="orta_div" id="randevu_div">
 <form action ="islem.php" method="post" >

    <input type="date" name="tarih">
    <select name="doktor" class= "doktor">
    <option volue= "emine kablan"> emine kablan</option>
    <option volue= "ahmet yiğit sari">ahmet yiğit sari </option>
    <option volue= "serkan akyil">serkan akyil </option>
</select>
 
<select name="brans" class= "brans">
    <option volue= "Ortodonti"> Ortodonti</option>
    <option volue= "‌periodontoloji. ">‌Periodontoloji.  </option>
    <option volue= "‌Implantoloji"> ‌Implantoloji</option>
    <option volue= "Ağiz ve Çene Cerrahisi">Ağiz ve Çene Cerrahisi</option>
</select>

<button name="randevu_kaydet">Randevu Kaydet</button>
</form>



</div>
<div class="orta_div" id="dishekimi_div"><br><h3> Diş Hekimi Ahmet Yiğit Sarı</h3>
<p>Pek çoğumuz diş hekimine gitmekten korkarız, gitme zamanı 
geldiğinde randevuyu ertelemek için elimizden geleni yaparız.
</p>
<p>Ancak iyi bir diş hekiminin altın değerinde olduğunu inkar
edemeyiz. Siz de onlardan biri olduğunuzu düşünüyorsanız,
özel diş kliniğimiz tamda size göre..
</p>


</div>



</body>
</html>