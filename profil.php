<?php 
include("startsession.php");
if(empty($_SESSION["kullanici_id"])){

  echo "henüz giriş yapmadınız";
  header("Refresh:2;url=index.html");
  echo "henüz giriş yapmadınız";

}else{

  include('notClass.php');

$not=new not();

?>

<!DOCTYPE html>
<html lang="tr">
<head>


  <style type="text/css">
    .icdiv{
    position: relative;
    border:1px solid black ;
    float:left;
    width: 200px; 
    height:250px;
    border-radius: 10px;
   
    margin-right: 5px;
    margin-top:  5px;
    word-wrap: break-word;

    }
 .icdiv:hover{
    border:solid grey;


    }
</style>

<?php include("header.php") ?> <!--header bölümü-->

<?php  include("ortakisim.php") ?>  <!--ikinci bölüm-->

</body>
</html>

<?php
}
?>


