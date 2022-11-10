<?php
$login=false;
$err=false;
$server = 'localhost';
$username = 'root';
$password = '31122002@Ag';
$database = 'users';

$conn = mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"";
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password= $_POST['password'];

    $query = "SELECT * FROM signup WHERE `email`='$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
         header("location:mpk/TxnTest.php");
        $login=true;

    }
    else {
        $error='email-id or password is incorrect';
        $err=true;
    }
}


?>