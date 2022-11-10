<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"";

session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password= $_POST['password'];

    $query = "SELECT * FROM users WHERE `email`='$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
         header("location:index.php");
    }
    else {
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skils'];
    $CTC=$_POST['CTC'];

    $job= "INSERT INTO `jobs`(`cname`,`position`,`Jdesc`,`skills`,`CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
}

// if (isset($_POST['submit'])) {
//     $name=$_POST['name'];
//     $qual=$_POST['qual'];
//     $apply=$_POST['apply'];
//     $year=$_POST['year'];

//     $sql = "INSERT INTO `candidates`( `name`, `apply`, `qual`,`year`) VALUES ('$name','$apply',''$qual','$year')"
//     mysqli_query($conn,$sql);
// }

if (isset($_POST['register'])) {
    $Name=$_POST['Name'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users` (`Name`,`email`,`password`,`phone_no`) VALUES ('$Name','$email','$password','$phone_no')";
    
    if (mysqli_query($conn, $sql)) 
    {
        echo "Successfully Registered";
    }else {
        echo "ERROR : Could not able to execute $sql.".mysqli_error($conn);
    }

}  


?>