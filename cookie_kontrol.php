<?php
/* cookie değerimizi değişkene alıyoruz */
$cookie = $_COOKIE['t_admin'];
/* karşılaştırma yazpıyoruz */
if ($cookie == "online"){
/* eğer doğruysa sayfanın üst kısmına tablo yazdırıyor */
/* buraya kullanıcı adını veya istedğiniz başka bir kodu girebilirsiniz */
echo "
<table width=\"100%\">
<tr>
<td width=\"100%\">Kullanıcı Paneli</td>
<td><a href=\"cikis.php\">Çıkış</a></td>
</tr>
</table>
";
}else{ /* eğer giriş yapılmamışsa giriş ekranına */
header('Location: index.php');
}
?>
 