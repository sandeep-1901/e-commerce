<?php

if (isset($_post['submit'])) {

  $_title = $_post['insert_title'];
  $_description = $_post['insert_description'];
  $_keyword = $_post['insert_keyword'];
  $_price = $_post['insert_price'];
  $_brand = $_post['product_brand'];
  $_category = $_post['product_category'];



  $_image1 = $_FILES['insert_image1']['name'];
  $_image2 =  $_FILES['insert_image2']['name'];
  $_image3 =  $_FILES['insert_image3']['name'];


  $_image1 =  $_FILES['insert_image1']['tmp_name'];
  $_image2 =  $_FILES['insert_image2']['tmp_name'];
  $_image3 =  $_FILES['insert_image3']['tmp_name'];

 
    move_uploaded_file($_image1, "/partial/img/$_image1");
    move_uploaded_file($_image2, "./partail/img/$_image2");
    move_uploaded_file($_image3, "./partial/img/$_image3");

    $insert_prod = "INSERT INTO `insert product`(`product title`, `product description`, `product price`, `product keyword`, `brand_description`, `category_description`, `image1`, `image2`, `image3`, `date`) VALUES ('NULL','$_title','$_description','$_keyword',' $_price','$_price','$_brand ',' $_category','$_image1','$_image3','$_image2')";
    $result = mysqli_query($conn, $insert_prod);
    if ($result) {
      echo 'your data has  been inserted';
    } else {
      echo "you have not inserted the product" ;
    }
  }


?>|