<?php 
//veri tabanı bağlantısını oluşturur
try{

 $db = new PDO("mysql:host=localhost;dbname=speednot;charset=utf8","root","");
}catch(Exception $e){
 echo $e->getMessage();
 echo "baglantı hatası";
}
?>