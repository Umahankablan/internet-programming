<?php
try {
    $baglanti = new PDO("mysql:host=127.0.0.1;dbname=dis_klinigi","root","");
   
  
  } catch(PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();
  }

  ?>