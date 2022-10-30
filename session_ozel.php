
<?php

// ozel_sayfa.php sayfası

session_start();

if($_SESSION["kullaniciadi"] == "umahan" && $_SESSION["kullanicisifresi"] == "admin1234")	
{
	echo "
	Bu sayfa size özel bir sayfadır. Oturumunuz başarıyla gerçekleştiği için şuan bu sayfaya girebilmektesiniz.
	<br><br>
	<a href='index.php'>Anasayfa</a> | <a href='cikis.php'>Çıkış</a>
	";
}
else
{
	header("location: giris.php");	
}

?>