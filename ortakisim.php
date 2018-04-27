<?php //orta kısımda tüm notları gösterir

?>
<style type="text/css">
  


</style>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "20%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}



</script>

<section class="bg-white" id="about" style="height: 100vh;">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-4  text-left ">            
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="#">
       
       <div id="flip"> KATEGORİLER</div>
<div id="panel" >
  
  <?php 
                  $not->tumkategorilerigoster($_SESSION["kullanici_id"]);//notları profil sayfasına çağıran fonksisyon 
                ?>
</div>   
        </a>

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
    $not->tumnotlarıgoster($_SESSION["kullanici_id"]);//notları profil sayfasına çağıran fonksisyon 
  ?>

      
      
        </div>
        
      </div>
     </div>
    </section>
    




<?php

?>