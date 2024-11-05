<?php 
include("templete/db_connect.php");





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Log in</title>
    <link rel="icon" href="">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/94ffa93c29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("templete/header.php")?>
 <div class="main d-flex justify-content-center align-items-center ">

<div class="signup  mb-3">
    <h3 class="mt-3">Sign Up </h3>

<form class="row g-3" action="templete/signup.php" method="Post" enctype="multipart/form-data">
    <div class="col-6">
    <label for="inputAddress" class="form-label">First Name</label>
    <input type="text" class="form-control" id="inputAddress" name="first_name" required>
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="inputAddress" name="last_name" required>
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" required>
  </div>
  <div class="col-md-6">   
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label">Gender</label>
    <select id="inputState" class="form-select" name="gender" required>
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
   <div class="col-9">
  <label for="inputGroupFile01" class="form-label" name="profile_picture">Choose Profile Picture</label>
  <input type="file" class="form-control " id="inputGroupFile01" >
  </div>
  <div class="col-12">
    <button type="submit" class="btn color text-light">Sign in</button>
  </div>
</form>
</div>

</div>




    <?php include("templete/footer.php")?>
    <script src="https://kit.fontawesome.com/94ffa93c29.js" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>