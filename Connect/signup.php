<?php
global $x;
$x="Your Account is Succesfully Created Kindly Login";
$showAlert=false;
$err=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/_dbconnect.php';
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$exists=false;
if($password==$cpassword && $exists==false){
    $sql="INSERT INTO `signup` (`email`, `password`, `date`) VALUES ('$username', '$password', current_timestamp());";
    $result=mysqli_query($conn,$sql);
    if($result){
      $showAlert=true;
      
    }
   
}
else
        $err="Kindly enter same password.";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <style>
      body{
    /* background-color: rgb(255, 240, 140); */
    background: linear-gradient(90deg, #9effe0, #ffb86b);
}
    </style>
</head>
  <body>

   <?php require 'partials/_nav.php' ?>
 <?php
 if($showAlert)
 echo '
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  if($err)
 echo '
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Password not matches!</strong>&nbsp'.$err.' 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>'; 
  ?>   
    <div class="container">
            <h1 class="text-center">Welcome To Sign up Form</h1>
    <form  method="post">
    <div class="mb-3">
    <label for="username" class="form-label"><b>First Name</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="username" class="form-label"><b>Last Name</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="username" class="form-label"><b>Phone No</label>
    <input type="number" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="username" class="form-label"><b>Date Of Birth</label>
    <input type="date" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
    
  </div>

    <div class="mb-3">
    <label for="username" class="form-label"><b>Email address</label>
    <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label"><b>Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label"><b>Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="cpassword" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1" required>
    <label class="form-check-label" for="checkbox">Terms & Conditions Apply</label>
  </div>
  <button type="submit" class="btn btn-primary">Signup</button>&nbsp;&nbsp;&nbsp;
  <button type="reset" class="btn btn-primary">Reset</button>
</form>     
    </div>  
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>