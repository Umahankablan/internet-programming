
<?php

// index.php sayfası

session_start();

if($_SESSION["kullaniciadi"] == "umahan" && $_SESSION["kullanicisifresi"] == "1234")	
{

echo "Hoş Geldiniz Sayın ".$_SESSION["kullaniciadi"]."<br><br>
<a href='ozel_sayfa.php'>Özel Sayfa</a> | <a href='cikis.php'>Çıkış</a>";
	
}
else
{

header("location: giris.php");	

}

?>
