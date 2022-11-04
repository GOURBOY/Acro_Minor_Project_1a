<?php
$servername="localhost";
$username="root";
$password="31122002@Ag";
$database="mydb";
$conn=new mysqli($servername,$username,$password,$database);
//now check the connection
if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
$id = $_POST['id'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
//For inserting the values to mysql database 
$sql_query = "INSERT INTO users(id,username,email,password)
VALUES ('$id','$user_name','$email','$pwd')";
if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry inserted successfully !";
}
else
     {
		echo "Error: ". $sql ."". mysqli_error($conn);
	 }
}
?>