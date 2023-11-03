<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    
  </head>
  <body>
  
    
   
<?php
$showAlert=false;
$showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  include"partial/connect.php";
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];

  if($username=='' or$password=='' or$cpassword=='')
  {
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">enter the credentials</h4>
    
    <hr>
    
  </div>';
  }
  
 
  else{
  if(($password==$cpassword))
   {

    $sql="INSERT INTO `category` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
    $result=mysqli_query($conn , $sql); 
    if($result)
    {
      $showAlert=true;

    }
    
    
   }
   else{
    $showError=true;

  }
  
  }
}

?>


    <?php
    if($showAlert){
      echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>you have succesfully created your account</p>
  <hr>
  
</div>';
    }
if($showError)
{
  echo '<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">confirm password and password do not match!</h4>
  
  <hr>
  
</div>';
}
    
?>
    
    
    <div class="container " >
   <h1 class="text-center">signup as user </h1>
   <form action="/E_COMMERCE/user.php" method="post" >
   <div class="mb-3 col-md=6" >
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username"aria-describedby="username" require>
    
  </div>
 
  <div class="mb-3 col-md=6">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password"name="password" require>
  </div>
  <div class="mb-3 col-md=6">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="cPassword1" name="cpassword" require>
    <div id="cpassword" class="form-text">make sure you enter the correct password.</div>
  </div>
  
  <button type="submit" class="btn btn-primary bg-secondary">sign up</button>
  <button class="btn btn-outline-success me-2 bg-secondary" type="button"><a href="/E_COMMERCE/ecom.php">Back</a></button>
</form>
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