<!DOCTYPE html>
<html>

<head>
<style type="text/css">
.mymedia{
    color:#ffc947;
  background: #241b18;

 border: 1px solid #ffffff; 

}
.mymediabody{
  margin:4px 6px 0px 0px;
 padding:4px;

}

.myimage{
  width: 160px;
  height: 140px;
  margin:4px 0px 4px 4px;
 border: 1px solid #ffffff; 
}

</style>
<?php require "./template/head.php"; ?>
    </head>





<body>
<div class="container">
<?php require "./template/navbar.php"; ?>



<?php 

require "./data/data.php";
foreach($items as $item){
    if($item['titre']==$_GET['item']){
      echo '
      
    
      <div class="row">
      <div class="col-12">
      <div class="media mymedia">
        <img src="./img/'.$item['image'].'" class="align-self-start mr-3  myimage" alt="..." myimage>
        <div class="media-body mymediabody">
          <h3 class="mt-0"> '.$item['titre'].' <span class="badge badge-danger">Chaud</span> <span class="badge badge-pill badge-secondary">'.$item['prix'].' Euros</span></h3>
          <p>Contenu : '.$item['contenu'].'</p>
          <p>Commenteire : '.$item['commentaire'].' </p>
          <button type="button" class="btn btn-success btn-lg btn-block">
      <span class="fa fa-shopping-cart"> Commander</span>
      </button>
        </div>
      </div>
      
      </div>
      </div>
   
      ';
      
      
      
      



    }
}


?>


</div>

</body>

</html>