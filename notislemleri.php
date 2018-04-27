<?php 

include("startsession.php");
if(empty($_SESSION["kullanici_id"])){

	echo "henüz giriş yapmadınız";


}else{


include('notClass.php');

$not=new not();



$islemno=$_POST["islemno"];//işlem noyu alıp ona göre notclasına gönderiri



	switch ($islemno) {
	case 'yeninot':
	if($_POST["paylasim"]){
		$not->yeninotekle($_SESSION["kullanici_id"],$_POST["yenibaslik"],$_POST["yenikategori"],$_POST["yeniicerik"],'paylas');
	}
	$not->yeninotekle($_SESSION["kullanici_id"],$_POST["yenibaslik"],$_POST["yenikategori"],$_POST["yeniicerik"],'');
		break;
	
	case 'notguncelle':
	$not->notguncelle($_POST["baslik"],$_POST["kategori"],$_POST["icerik"],$_POST["paylasim"],$_SESSION["kullanici_id"],$_POST["notid"]);
		break;

	case 'notsil':
		$not->notsil($_SESSION["kullanici_id"],$_POST["notid"]);

		break;
	case 'noticinigoster':
		$not->noticinigoster($_POST["notid"]);

		break;
	case 'kategoriicinigoster':
		$not->kategoriicinigoster($_SESSION["kullanici_id"],$_POST["kategoriad"],$_POST["kategoriid"]);
		  
		break;

	case 'paylasılannotlar':
		$not->paylasılannotlar($_SESSION["aranacakkisi"]);
		break;


	case 'notara':
			$not->notara($_SESSION["kullanici_id"],$_POST["aranannot"]);  
	
		break;


	}

}


?>



	