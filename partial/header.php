
<?php
 
include("connect.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/E_COMMERCE/admin_user.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/E_COMMERCE/login.php">Login </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="#">   </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="row mb-2 px-1" >
        <div class="col-md-10 mb-2">
            <div class="row">
               <?php
 include('connect.php');
 $select_query= "SELECT * FROM `insert product` order by category_description LIMIT 0,16";
 $result=mysqli_query($conn,$select_query);
 while($row=mysqli_fetch_assoc($result)){
  $product_tilte=$row['product title'];
  $product_description=$row['product description'];
  $product_price=$row['product price'];
  $product_keyword=$row['product keyword'];
  $product_brand=$row['brand_description'];
  $product_category=$row['category_description'];
  $product_img1=$row['image1'];
  $product_img2=$row['image2'];
  $product_img3=$row['image3'];
  echo"
  <div class='card mb-4 p-1 bg-light' style='width: 20rem;'>
  <img src='./partial/img/$product_img1' class='card-img-top ' height='250px'  alt='$product_tilte'>
  <div class='card-body'>
    <h5 class='card-title'>$product_tilte</h5>
    <p class='card-text '>$product_description</p>
    <p class='card-text'>$product_price</p>
    <a href='#' class='btn btn-primary bg-danger'>cart</a>
    <a href='#' class='btn btn-primary bg-danger'>show more</a>
  </div>
</div>
  ";
 
  
 }
?>

<div class="col-md-4 mb-2">
                    
</div>
</div>
</div>
<div class="col-md-2 navbar-dark bg-dark p-0">
<ul class="navbar-nav me-auto text-center">
<li class="nav-item  bg-danger" >
<a class="nav-link" href="#"><h4>brands</h4></a>
</li>


<?php
 include('connect.php');
 $select_brands= "SELECT * FROM `brand`";
 $result_brand=mysqli_query($conn,$select_brands);
 while($row_brand=mysqli_fetch_assoc($result_brand)){
  $row_description=$row_brand['brand_description'];
  $row_product_id=$row_brand['brand_id'];
  echo"
  <li class='nav-item ' >
  <a class='nav-link' href='#'>$row_description</a>
  </li>";
 }
?>
</ul>


<ul class="navbar-nav me-auto text-center">
<li class="nav-item  bg-danger" >
<a class="nav-link" href="#"><h4>category</h4></a>
</li>
<?php
 include('connect.php');
 $select_category= "SELECT * FROM `product_category` ";
 $result_category=mysqli_query($conn,$select_category);
 while($row_category=mysqli_fetch_assoc($result_category)){
  $row_category_description=$row_category['category_description'];
  $row_category_id=$row_category['category_id'];
  echo"
  <li class='nav-item ' >
  <a class='nav-link' href='#'>$row_category_description</a>
  ";
 }
?>


</ul>




<ul class="navbar-nav me-auto text-center">

<li class="nav-item  bg-danger" >
<a class="nav-link" href="#"><h4>dashboard</h4></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">• Dashboard for Users</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">• Dashboard for Sellers</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/E_COMMERCE/partial/admin_dashboard.php">• Admin Dashboard</a>
</li>

</ul>
</div>
</div>


