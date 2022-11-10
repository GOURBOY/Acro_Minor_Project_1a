<!DOCTYPE html>
<?php include "config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      body{
        background-image: url(img2.jpg);
        background-size: cover;
      }
      form{
        background-color: white;
         margin-top: 6em;
         margin-left: 30em;
         margin-right: 10em;
         /* margin-bottom: 5em; */
         padding: 30px;
         box-shadow: 10px 10px 8px #888888;
      }
    </style>
    <title>Login</title>
</head>
<body>
  <div class="container">
    <form method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
   <button type="submit" class="btn btn-primary" name="login"> Submit</button>
  <p style="text-align:center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>

  </form>
    </div>
</body>
</html>