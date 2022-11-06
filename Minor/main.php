<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Minor Proj</title>
</head>
<body>

<div class="container">
    <form action="#" method="POST">
    <div class="title">
        Registration Form
    </div>
    <div class="form">
        <div class="input_field">
            <label> First Name</label>
            <input type="text" class="input" name="fname">
        </div>
        <div class="input_field">
            <label> Last Name</label>
            <input type="text" class="input" name="lname">
        </div>
        <div class="input_field">
            <label> Password</label>
            <input type="password" class="input" name="pass">
        </div>
        <div class="input_field">
            <label> Confirm Password</label>
            <input type="password" class="input" name="conpass">
        </div>
        <div class="input_field">
            <label> Gender</label>
           <select name="gen">
               <option>Select</option>
               <option >Male</option>
               <option >Female</option>
           </select>
        </div>
        <div class="input_field" >
            <label> Email</label>
            <input type="text" class="input" name="email">
        </div>
        <div class="input_field">
            <label> Phone</label>
            <input type="text" class="input" name="phn"> 
        </div>
        <div class="input_field">
            <label> Address</label>
            <textarea name="adr" cols="30" rows="4" class></textarea>
        </div>
        <div class="input_field">
            <input type="submit" value="register" class="btn" name="btn">
        </div>

        </form>
</div>
</body>
</html> 



