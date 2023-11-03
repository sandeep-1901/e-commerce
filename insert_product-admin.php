

<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <title>insert-product</title>
  </head>
  <body>
    <h1 class="text-center">product-details</h1>
    <div class="container mt-4 w-50 m-auto">
        <form action="" method="post" enctype="multipart/form-data">
     <div class="form-outline mb-3">
     <label for="product_title" class="form-label">product-title</label>
     <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter the product title " required="required">
      </div>

      <div class="form-outline mb-3">
     <label for="product_description" class="form-label">product-description</label>
     <input type="text" name="product_description" id="product_description" class="form-control" placeholder="enter the product-description " required="required">
      </div> 

  
      <div class="form-outline mb-3">
     <label for="product_keyword" class="form-label">product-keyword</label>
     <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="enter the product_keyword " required="required">
      </div> 

      <div class="form-outline mb-3">
     <select name="product_category" id="" class="form-select">
      <option value="">select a acategory</option>

      

      <option value="">category1</option>
      <option value="">category2</option>
      <option value=""> acategory3</option>
      <option value="">acategory4</option>
  
      </select>
      </div>
      
      
      <div class="form-outline mb-3">
     <select name="product_brands" id="" class="form-select">
      <option value="">select a brand</option>
      <option value="">brand 1</option>
      <option value="">brand 2 </option>
      <option value=""> brand 4</option>
      <option value="">brand 3</option>
     </select>
      </div>

      <div class="form-outline mb-3">
     <label for="product_image1" class="form-label">product-image-1</label>
     <input type="file" name="product_image1" id="product_imaage1" class="form-control" required="required">
      </div>  

      <div class="form-outline mb-3">
     <label for="product_image2" class="form-label">product-image-2</label>
     <input type="file" name="product_image1" id="product_imaage2" class="form-control" required="required">
      </div>
      
      <div class="form-outline mb-3">
     <label for="product_image3" class="form-label">product-image-3</label>
     <input type="file" name="product_image3" id="product_imaage3" class="form-control" required="required">
      </div>
      
      <div class="form-outline mb-3">
     <label for="product_price" class="form-label">product-price</label>
     <input type="text" name="product_price" id="product_price" class="form-control" placeholder="enter the product_price " required="required">
      </div> 

      <div class="form-outline mb-3">
     <input type="submit" name="insert_product " class="btn btn-info" value="insert product">
      </div>

        </form>
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