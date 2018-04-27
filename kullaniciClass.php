<?php
class kullanici{

public function yenikayit($a,$b,$c,$d,$e){////

include("baglan.php");
$sorgu=$db->prepare("INSERT INTO kullanici (kullanici_id,kullanici_ad,kullanici_mail,kullanici_sifre,kullanici_isim,kullanici_soyisim)
 					VALUES (?,?,?,?,?,?)");

$sorgu->execute(array("",$a,$b,$c,$d,$e));//kullanıcı id haric tüm bilgiler eklenir kullanıcı isim ve soy isim haric onlar profili tamamlada olck

echo "kayit eklendi";
header("location:index.html");
include("baglancikis.php");
}////



public function giris($a,$b){///
include("startsession.php");
include("baglan.php");


$sorgu=$db->prepare("SELECT * FROM kullanici WHERE kullanici_ad=? AND kullanici_sifre=?");
$sorgu->execute(array($a,$b));
$say=$sorgu->fetchColumn();//veri tabanındaki satır sayısını sayar


if($say>0){//eğer dönen bir satır sayısı var ise sessionun id kısmına bir kullanıcı id atanıyor




$sorgu=$db->query("SELECT kullanici_id FROM kullanici WHERE kullanici_ad='$a'");
foreach($sorgu as $key){
$_SESSION["kullanici_id"]=$key["kullanici_id"];
$_SESSION["kullanici_ad"]=$a;	
echo "giris yapıldı";
header("location:profil.php");
include("baglancikis.php");
}
}else{
header("Refresh:3;url=index.html");
echo "<h1 style='color:red; margin-top:150px;' ><center>ŞİFRE VEYA KULLANICI ADI HATALI<br><br>BİR ÖNCEKİ SAYFAYA YÖNLENDİRİLİYORSUNUZ!...</center></h1>";
}
}

///



public function hesapguncelle($a,$b,$c,$d,$e,$f){
  include("baglan.php");
  $sorgu=$db->query("UPDATE kullanici SET kullanici_id=$a,kullanici_ad=$b,kullanici_mail=$c,kullanici_sifre=$d,kullanici_isim=$e,kullanici_soyisim=$f");
  include("baglancikis");

}



}

?>