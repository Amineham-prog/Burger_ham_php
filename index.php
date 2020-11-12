<!DOCTYPE html>
<html>
 <head>
<?php require "./template/head.php"; ?>  
</head>


    <body>
        <!---nav de bootstrap/navbar-dark/------------------------------------------------------------------------------->
        <?php require "./template/navbar.php"; ?>
        <!------------------------ End Nav ---------------------------------------------------->


<div class="container"><!--------------------Container Géneral  ------------------------------->
<!----------CAROUSSEL ---------------------------------------------->
<?php require "./template/caroussel.php"; ?>   
 <!---------end caroussel ------------------------------------------>

  <div class="row row-content">



  <?php
require_once('./data/data.php')

?>
  <?php 
   foreach($items as $item){
     echo '
     <div class="col-12 col-sm-6 col-md-4">
      <!-----------CARD-------------->
      <div class="card mycard">
        <img class="card-img-top photo" src="./img/'. $item['image'] .'" alt="Card image cap">
        <div class="card-body bodycard">
          <h5 class="card-title">'. $item['titre'] .'</h5>
          <p class="card-text contentcard">'. $item['contenu'] .'</p>
        </div>
        <div class="card-body bodycard">
          <!-------Button ------------------------------------>
          <button type="button" class="btn btn btn-success"  role="button">
            <span class="fa fa-sign-in"></span>  <a href="detail.php?item='. $item['titre'] .'"> Voir </a></button>
          <!----------------------------------------------->
        </div>
      </div>
      <!----------END CARD ------------------>

  </div>
     
     ';
   }
   ?>

    


  
  </div>

</div> 





</div>
    </body>


      
</html>