<?php
class not{



//@a aranacak kullanıcı adını tutan değişken
public function paylasılannotlar($a){//hazırlanacak 
include("baglan.php");
$sorgu=$db->query("SELECT * FROM notlar WHERE  paylasim='paylas' and kullanici_id=(SELECT kullanici_id FROM kullanici WHERE kullanici_ad=$a)");

foreach ($sorgu as $key) {
?>

<form action="notislemleri.php" method="post" id="<?php echo $key["not_id"]; ?>" name="notgosterform">
<div onclick="document.getElementById('<?php echo $key["not_id"];   ?>').submit();"   class="icdiv" >
 
 <input style="visibility: hidden;  width:0px; " name="notid" type="text"  value=" <?php echo $key["not_id"]; ?>">
  <?php echo $key["not_baslik"]; echo "<hr style='margin-top:2px'> " ?>
 <?php echo  $key["not_icerik"]; ?> 

 <input name="islemno" type="text" style="visibility:hidden;" value="noticinigoster">
 </div> 
</form>
<?php
}
include("baglancikis.php");

}  

public function tumnotlarıgoster($a){

include("baglan.php");
$sorgu=$db->query("SELECT * FROM  notlar WHERE kullanici_id=$a");


						  //notların tabloda gösterilmesini sağlanyan bolüm
foreach ($sorgu as $key) {
?>

<form action="notislemleri.php" method="post" id="<?php echo $key["not_id"]; ?>" name="notgosterform">
<div onclick="document.getElementById('<?php echo $key["not_id"];   ?>').submit();"   class="icdiv" >
 
 <input style="visibility: hidden;  width:0px; " name="notid" type="text"  value=" <?php echo $key["not_id"]; ?>">
  <?php echo $key["not_baslik"]; echo "<hr style='margin-top:2px'> " ?>
 <?php echo  $key["not_icerik"]; ?> 

 <input name="islemno" type="text" style="visibility:hidden;" value="noticinigoster">
 </div>	
</form>
<?php
}
include("baglancikis.php");
}



public function tumkategorilerigoster($a){

include("baglan.php");
$sorgu=$db->query("SELECT * FROM  kategoriler WHERE kullanici_id=$a");


              //notların tabloda gösterilmesini sağlanyan bolüm
foreach ($sorgu as $key) {
?>



<form action="notislemleri.php" method="post" id="<?php echo $key["kategori_id"]; ?>" name="kategoriicigosterform">
<div onclick="document.getElementById('<?php echo $key["kategori_id"];   ?>').submit();">
 <input  disabled style=" 
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    background-color:transparent;
    border-style: none;
    height: 30px;
    width: 200px;
    top: 10px;  




      "  name="kategoriad" type="text" value="<?php echo $key["kategori_ad"]; ?>"> </input>

 <input style="
 float: right;
    visibility:hidden; 
    width: 1px; 
    height: 1px;"  name="kategoriid" type="text"  value="<?php echo $key["kategori_id"]; ?>">

 

 <input name="islemno" type="text" style=" 
    width: 1px;
    float: right;
    height: 1px;
    visibility:hidden;
      " value="kategoriicinigoster">
 </div> 
</form>
<?php
}
include("baglancikis.php");
}

public function kategoriicinigoster($a,$b,$c){
include("baglan.php");
$sorgu=$db->query("SELECT * FROM  notlar WHERE    kullanici_id=$a and kategori_ad=(SELECT kategori_ad FROM  kategoriler WHERE  kategori_id='$c')");


   //notların tabloda gösterilmesini sağlanyan bolüm

foreach ($sorgu as $key) {

?>

<form action="notislemleri.php" method="post" id="<?php echo $key["not_id"]; ?>" name="notgosterform">
<div onclick="document.getElementById('<?php echo $key["not_id"];   ?>').submit();"   class="icdiv" >
 
 <input style="visibility: hidden;  width:0px; " name="notid" type="text"  value=" <?php echo $key["not_id"]; ?>">
  <?php echo $key["not_baslik"]; echo "<hr style='margin-top:2px'> " ?>
 <?php echo  $key["not_icerik"]; ?> 

 <input name="islemno" type="text" style="visibility:hidden;" value="noticinigoster">
 </div> 
</form>





<?php
}
include("baglancikis.php");
}
	
public  function yeninotekle($a,$b,$c,$d,$e){

include("baglan.php");




$sorguu=$db->query("SELECT * FROM kategoriler WHERE kategori_ad='$c'");
$sayi=$sorguu->rowCount();//gelen sorguda satır sayısı öğrenilir


if($sayi>0){//eğer dönen bir satır sayısı var ise sessionun id kısmına bir kullanıcı id atanıyor
echo "var";
}
else{
  echo "yok";
    $sorguu=$db->prepare("INSERT INTO kategoriler (kategori_id,kategori_ad,kullanici_id) VALUES(?,?,?)");
  $sorguu->execute(array("",$c,$a));
  
}
$sorgu=$db->prepare("INSERT INTO notlar (not_id,kullanici_id,not_baslik,kategori_ad,not_icerik,olusturma_tarihi,guncelleme_tarihi,paylasim) VALUES (?,?,?,?,?,?,?,?)");
$sorgu->execute(array("",$a,$b,$c,$d,"","",$e));

header("location:profil.php");

include("baglancikis.php");
}

public function notguncelle($a,$b,$c,$d,$e,$f){
include("baglan.php");

$sorgu=$db->prepare("UPDATE notlar  SET not_baslik=?,kategori_ad=?,not_icerik=?,paylasim=?  
          WHERE kullanici_id=? AND  not_id=?");
$sorgu->execute(array($a,$b,$c,$d,$e,$f));
header("location:profil.php");
include("baglancikis.php");
}

public function notsil($a,$b){

include("baglan.php");
$sorgu=$db->prepare("DELETE  FROM notlar  WHERE kullanici_id=? AND  not_id=?");
$sorgu->execute(array($a,$b));
header("location:profil.php");
include("baglancikis.php");
}


public function notara($a,$b){//arama barına yazılan baslık ile notu çeken fonksiyon


include("header.php");
    ?>

 



<section class="bg-white" id="about" style="height: 100vh;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4  text-left ">            
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">KATEGORİLER</a>
            <?php $this->tumkategorilerigoster($_SESSION["kullanici_id"]); ?>

      </div>
            
          </div>
          <div class="col-lg-4 ml-5"  >            
           <p class=" mb-5 mt-5  "  ><h1  style="margin-left: 10px;" class="text-primary">YENİ NOT</h1></p>
           <a  style="margin-left: 30px;" href="notgir.php"><i  class=" ml-5 fa fa-4x fa-plus-circle"></i></a>
        </div>
      </div>


     <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8 ml-3 " style="position: relative; left: -10px; top: 20px;">
        <?php





include("baglan.php");
$sorgu=$db->prepare("SELECT * FROM notlar   WHERE kullanici_id=? AND  not_baslik=? OR kategori_ad=?");
$sorgu->execute(array($a,$b,$b));
              
foreach ($sorgu as $key) {
?>





<form action="notislemleri.php" method="post" id="<?php echo $key["not_id"]; ?>" name="notgosterform">
<div onclick="document.getElementById('<?php echo $key["not_id"];   ?>').submit();"   class="icdiv" >
 
 <input style="visibility: hidden;  width:0px; " name="notid" type="text"  value=" <?php echo $key["not_id"]; ?>">
  <?php echo $key["not_baslik"]; echo "<hr style='margin-top:2px'> " ?>
 <?php echo  $key["not_icerik"]; ?> 

 <input name="islemno" type="text" style="visibility:hidden;" value="noticinigoster">
 </div> 
</form>

<?php
}
?>

        </div>
        
      </div>
     </div>
    </section>
    

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}



</script>

</head>
</body>

<?php

include("baglancikis.php");
}






public function noticinigoster($not_id){


include("baglan.php");  

$sorgu=$db->prepare("SELECT * FROM notlar WHERE   not_id=?");
$sorgu->execute(array($not_id));
foreach ($sorgu as $key ) {
	?>

<?php include("header.php") ?> <!--header bölümü-->   

<!--ikinci bölüm-->
	<section class="bg-white"   id="about" style="height: 100vh;">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-4  text-left ">
        	        
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  < <?php $this->tumkategorilerigoster($_SESSION["kullanici_id"]); ?>
			</div>
              
          </div>
         <div class="col-lg-4 mt-4">
			<form  class="form-inline" action="notislemleri.php" method="post" action="notekle.php" method="post" name="profilform">
				<input class="form-control" style="width: 350px;" type="text" name="kategori" placeholder="kategori_giriniz" value="<?php  echo $key["kategori_ad"]; ?>"/><br>
				<input class="form-control" style="width: 350px;" type="text" name="baslik" placeholder="baslık" value="<?php   echo $key["not_baslik"];  ?>"/>
				<input type="text" name="notid" style="visibility: hidden;height: 1px; "  value="<?php  echo $key["not_id"];  ?>"/>
				<input type="text" name="islemno" style="visibility: hidden; height: 1px;"  value="notguncelle"/>
				<textarea class="form-control" style="width: 350px; height: 65vh;" name="icerik"> <?php   echo $key["not_icerik"]; ?></textarea><br>
				
					<div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="yeninot" id="defaultCheck1">
                        <label class="form-check-label text-muted" for="defaultCheck1">
                        Notumu paylaş
                        </label>
                        <button class="btn btn-primary btn-outline-primary mt-2 ml-5"   type="submit" name="gonder" >GÜNCELLE</button>
                    </div>
                    
				
				</form>
				 <form  action="notislemleri.php" method="post"  name="notsilform" id="notsilform">
				<button class="btn-outline-primary btn-primary" >notu sil</button>
        <input type="text" name="islemno"  value="notsil" style="visibility: hidden;"/>
				<input type="text" name="notid"  value="<?php echo $key["not_id"];   ?>" style="visibility: hidden;"/>
			</form>

		</div>
</div>
<div class="col-lg-4">
      


        </div>
			</div> 
		
    </section>
    <section class=" mt-5 colored-section bg-inverse footer pt-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Bize Yazın</a>
                                </li>                                   
                            </ul>
                            <p class="mt-4 text-muted">
                                &copy; 2018 <a style="text-decoration: none;" href="#">notaltk.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section> 
    

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}



</script>
</body>
</html>


	<?php
}

include("baglancikis.php");
}





}
?>

