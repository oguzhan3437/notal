<?php

?>

    <title>PROFİL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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

</head>
<body >

<section class="bg-warning">
<nav class="navbar navbar-expand-lg	 navbar-light" id="mainNav">
      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="profil.php">LOGO</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="collapse navbar-collapse" id="navbarResponsive">
        	
          
          	<form action="notislemleri.php" method="post"   class="form-inline   my-lg-0 ml-2 col-4 ml-lg-auto" >
                 <input  name="aranannot" class="form-control " type="Search" placeholder="Not Ara" aria-label="Search">
                 <input style="visibility: hidden; width:0px;height: 0px"  name="islemno" value="notara">
                 <input style="visibility: hidden; width:0px;height: 0px"   type="submit">
                   
                   

        
            </form>
    
    <ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	<i class="fa fa-user sr-icons "></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" style=" pointer-events: none;
          cursor: default;" href="#"><?php    echo $_SESSION["kullanici_ad"];     ?> </a>
          <hr style="margin-top: 2px;">
         
          <a class="dropdown-item" href="profil.php">Profil</a>
          <a class="dropdown-item" href="kullanicibilgi.php">Şifre Ayarı</a>
          <a class="dropdown-item" href="kullaniciara.php">Kullanıcı Ara</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cikis.php">Oturumu Kapat</a>
        </div>
      </li>
          
          </ul>
        </div>
      </div>
    </nav>
</section>

<?php


?>