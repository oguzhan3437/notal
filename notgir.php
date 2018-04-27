<?php
include("startsession.php");
if(empty($_SESSION["kullanici_id"])){

echo "henüz giriş yapmadınız";
}else{

include('notClass.php');

$not=new not();



?>

<!DOCTYPE html>
<html lang="en">
<head>


  



  <title>PROFİL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/profil.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body >

<section class="bg-warning">
<nav class="navbar navbar-expand-lg	 navbar-light" id="mainNav">
      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="#page-top">LOGO</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        	
          
          	<form class="form-inline  my-lg-0 ml-2 col-lg-4 ml-lg-auto ">
      <input class="form-control " type="Search" placeholder="Not Ara" aria-label="Search">
      
    </form>
    
    <ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	<i class="fa fa-user sr-icons "></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" style=" pointer-events: none;
          cursor: default;" href="#">Kullanıcı Adı</a>
          <hr style="margin-top: 2px;">
          <a class="dropdown-item" href="profil.php">Profil</a>
          <a class="dropdown-item" href="#">Şifre Ayarı</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cikis.php">Oturumu Kapat</a>
        </div>
      </li>
          
          </ul>
        </div>
      </div>
    </nav>
</section>
<!--ikinci bölüm-->
	<section class="bg-white"   id="about" style="height: 100vh;">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-4">
        	        
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="#">KATEGORİLER</a>
			  <a href="#">KTGR1</a>
			  <a href="#">KTGR2</a>
			  <a href="#">KTGR3</a>
			</div>
              
          </div>
         		
         		
					
		
    <div class="col-lg-4 mt-5">
        <form action="notislemleri.php" method="post" name="profilform">
          <input class="form-control"  type="text" name="yenikategori" placeholder="kategori_giriniz"/><br>
          <input class="form-control"  type="text" name="yenibaslik" placeholder="baslık" /><br>
          <textarea rows="15" class="form-control" id="exampleFormControlTextarea1"  name="yeniicerik" placeholder="notunuzu girin"></textarea>
          <div class="form-check  mt-2 ">
                        <input name="paylasim" class="form-check-input " type="checkbox"  id="defaultCheck1">
                        <label class="form-check-label  text-muted" for="defaultCheck1">
                        Notunumu paylaş
                        </label> 
                        
                        <button class="btn btn-primary btn-outline-primary ml-5 mt-2 " type="submit" name="gonder" >KAYDET</button>
                       
                    </div>
           <input type="text" name="islemno" style="visibility: hidden; width: 115px;"  value="yeninot">
          
          </div>
        </form>
      </div>
      <div class="col-lg-4"></div>

    </div>
  </div>
    </section>
     <section class="colored-section bg-inverse footer pt-1">
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
    document.getElementById("mySidenav").style.width = "20%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}



</script>
</body>
</html>



<?php 

}



?>
