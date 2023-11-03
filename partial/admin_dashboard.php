<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <title>admin dashboard</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <ul class="navbar-nav">
   <li class="nav-item">
   <a class="nav-link" href="#">welcome admin</a>
   </li>
   <li class="nav-item">
   <a class="nav-link" href="/E_COMMERCE/ecom.php">home</a>
   </li>

  </ul>
  
  </div>
  </nav>
  <div >
    <h3 class="text-center md-2 p-2">
      manage your E-STORE
    </h3>
  </div>
  <div class="row bg-secondary d-flex">
    <div class="col-12 p-4">
<div class="text-center">
  <button><a href="/E_COMMERCE/partial/insertproduct_2.php" class="nav-link text-light bg-info my-1">insert product</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">view product</a></button>
  <button><a href="/E_COMMERCE/partial/admin_dashboard.php?insert_cat" class="nav-link text-light bg-info my-1">insert category</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">view category</a></button>
  <button><a href="/E_COMMERCE/partial/admin_dashboard.php?insert_brd" class="nav-link text-light bg-info my-1">insert brand</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">view product</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">all payment</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">all users</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">log out</a></button>
 
</div>
</div>

<div class="container">
<?php
    if(isset($_GET['insert_cat']))
    {
      include('insert_category.php');
    }
    ?>
  </div>
  <div class="container">
  <?php
    if(isset($_GET['insert_brd']))
    {
      include('insert_brand.php');
    }
    ?>

</div>
  </div>

</div>
  </div>
  

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