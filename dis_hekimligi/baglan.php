<?php
try{
    $db = new PDO("mysql:host=localhost; dbname=dis_klinigi; charest=utf8", 'root','');
   // echo 'veri tabanı baglantısı başarılı';
}
catch(Exception $e){
    echo $e -> getMessage();
}



?>


