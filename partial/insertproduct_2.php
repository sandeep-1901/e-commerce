<?php
$include = include('connect.php');
if (!$include) {
  echo "connection failed" . mysqli_error($conn);
} 
?>
<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

  <title></title>


<body>
<div class="container p-0">
<nav class="navbar bg-dark text-dark">
  <form class="container-fluid justify-content-start">
    <button  class="btn btn-outline-success me-2" type="button"><a href="/E_COMMERCE/ecom.php"> Home</a></button>
    <button class="btn btn-outline-success me-2" type="button"><a href="/E_COMMERCE/partial/admin_dashboard.php">Back</a></button>
  </form>
</nav>
</div>
  <h1 class="text-center bg-light text-secondary">product description</h1>
  <div class="container bg-light  text-secondary text center">
    <form action="/E_COMMERCE/partial/insertproduct_2.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="" class="form-label">enter the product title</label>
        <input type="text" name="insert_title" class="form-control" id="insert_title">

      </div>


      <div class="mb-3">
        <label for="insert_description" class="form-label">enter the product description</label>
        <input type="text" name="insert_description" class="form-control" id="insert_description" require aria-describedby="">


      </div>


      <div class="mb-3">
        <label for="insert_keyword" class="form-label">enter the product keyword</label>
        <input type="text" name="insert_keyword" class="form-control" require id="insert_keyword">

      </div>


      <div class="mb-3">
        <label for="" class="form-label">enter the product price</label>
        <input type="text" name="insert_price" class="form-control" require id="insert_price" aria-describedby="">


      </div>



      <div class="mb-3">
        <label for="product_brand" class="form-label">select the product brand</label>
        <select class="form-select" name="product_brand" require id="product_brand" aria-label="Default select example">
          <option selected>select product brand</option>

          <?php
          include('connect.php');
          $select_brands = "SELECT * FROM `brand`";
          $result_brand = mysqli_query($conn, $select_brands);
          while ($row_brand = mysqli_fetch_assoc($result_brand)) {
            $row_description = $row_brand['brand_description'];
            $row_product_id = $row_brand['brand_id'];
            echo "<option >$row_description</option>
                ";
          }
          ?>

        </select>

      </div>

      <div class="mb-3">
        <label for="product_category" id="product_category" class="form-label">select the product category</label>
        <select class="form-select" require name="product_category" id="product_category" aria-label="Default select example">
          <option selected>select product category</option>
          <?php
          include('connect.php');
          $select_category = "SELECT * FROM `product_category` ";
          $result_category = mysqli_query($conn, $select_category);
          while ($row_category = mysqli_fetch_assoc($result_category)) {
            $row_category_description = $row_category['category_description'];
            $row_category_id = $row_category['category_id'];
            echo "
                <option >$row_category_description</option>
                ";
          }
          ?>

        </select>

      </div>




      <div class="mb-3">
        <label for="" class="form-label">enter the product image 1</label>
        <input type="file" name="insert_image1" require class="form-control" id="insert_image1" aria-describedby="">


      </div>

      <div class="mb-3">
        <label for="" class="form-label">enter the product image 2</label>
        <input type="file" name="insert_image2" require class="form-control" id="insert_image2" aria-describedby="">


      </div>
      <div class="mb-3">
        <label for="" class="form-label">enter the product image 3</label>
        <input type="file" name="insert_image3" require class="form-control" id="insert_image3" aria-describedby="">


      </div>








      <div class="mb-3 form-check">
        <input type="checkbox" require class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>



  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $_title = $_POST['insert_title'];
  $_description = $_POST['insert_description'];
  $_keyword = $_POST['insert_keyword'];
  $_price = $_POST['insert_price'];
  $_brand = $_POST['product_brand'];
  $_category = $_POST['product_category'];


  $_image1 =  $_FILES['insert_image1']['name'];
  $_image2 =  $_FILES['insert_image2']['name'];
  $_image3 =  $_FILES['insert_image3']['name'];


$folder='./img';
  $tmp_image1 =  $_FILES['insert_image1']['tmp_name'];
  $tmp_image2 =  $_FILES['insert_image2']['tmp_name'];
  $tmp_image3 =  $_FILES['insert_image3']['tmp_name'];

  if ($_title =='' or $_description =='' or $_keyword =='' or $_price=='' && $_brand =='' or$_category =='' or $_image1 == '' or $_image2 == '' or $_image3 =='') {
    echo '<div class="alert alert-danger mb-3 p-3" role="alert">
    <h4 class="alert-heading">sorry!</h4>
    <p>ohhh!!!, please fill all the details.</p>
    <hr>
    
  </div>';
  } else {
    move_uploaded_file($tmp_image1, "./img/$_image1");
    move_uploaded_file($tmp_image2, "./img/$_image2");
    move_uploaded_file($tmp_image3, "./img/$_image3");

    $insert_prod = "INSERT INTO `insert product` (`product title`, `product description`, `product price`, `product keyword`, `brand_description`, `category_description`, `image1`, `image2`, `image3`) VALUES ('$_title', '$_description', '$_price', '$_keyword', '$_brand', '$_category', '$_image1', '$_image2', '$_image3')";
    $result = mysqli_query($conn, $insert_prod);
    if ($result) {
      echo '<div class="alert alert-success mb-3 p-3" role="alert">
      <h4 class="alert-heading">Well done!</h4>
      <p>Aww yeah, you successfully inserted your product.</p>
      <hr>
      
    </div>';
    } else {
      echo '<div class="alert alert-danger mb-3 p-3" role="alert">
      <h4 class="alert-heading">sorry!</h4>
      <p>ohhh!!!, failed to inserted your product.</p>
      <hr>
      
    </div>';
    }
  }
}

?>