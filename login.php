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

<div class="login">
    <h2>Log in</h2>

<form action="templete/login.php" method="post">
    <div class="form-floating mb-3 w-100 mt-3">
  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating w-100">
  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>

<button class="btn color mt-3 text-light " type="submit">
Log in
</button>

</form>


<div class="mt-3">
<p>Don't have a account? <a href="signup.php">Create One</a></p>


</div>


</div>

</div>




    <?php include("templete/footer.php")?>

    <script src="https://kit.fontawesome.com/94ffa93c29.js" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>