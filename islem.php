<?php


include('kullaniciClass.php');

$kullanici=new kullanici();


$islemno=$_POST["islemno"];

switch ($islemno) {
	case 'kayitekle':
		$kullanici->yenikayit($_POST["yeniKullaniciad"],$_POST["yeniMail"],$_POST["yeniSifre"],"","");
				
		break;
	
	case 'giris':
		$kullanici->giris($_POST["kullaniciAd"],$_POST["sifre"]);
		break;

	
	case 'hesapguncele':
		$kullanici->hesapguncele($_POST["kullanici_id"],$_POST["kullanici_ad"],$_POST["kullanici_mail"],$_POST["kullanici_sifre"],$_POST["kullanici_isim"],$_POST["kullanici_soyisim"]);
		break;	

}






?>