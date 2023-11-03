<?php

$showAlert=false;


if($_SERVER["REQUEST_METHOD"]=="POST")
{
  include('connect.php');
  $insert_cat=$_POST["insert_category"];

    $sql="INSERT INTO `product_category` (`category_description`) VALUES ( '$insert_cat')";
    $result=mysqli_query($conn , $sql); 
    if($result)
    {
      $showAlert=true;

    }
    else{
      $showError="can't insert the product".mysqli_error($conn);

    }
    
   
  
  

}
?>


    <?php
    if($showAlert){
      echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done! you have insert the category </h4>
  <hr>
  
</div>';
    }


?>

<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <title>insert product</title>
  </head>
  <body>
  <form action="" method="post" class="mb-2">
  
  <div class="mb-3">
    <label for="insert_category" class="form-label">insert  category</label>
    <input type="text" class="form-control" name="insert_category" id="insert_category">
  </div>
 
  <button type="submit" class="btn btn-primary">insert</button>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


