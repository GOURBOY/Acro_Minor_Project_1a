<?php
$server ="localhost";
$username = "root";
$password = "31122002@Ag";
$database ="users";
$conn =mysqli_connect($server,$username,$password,$database);
if(!$conn)
        die("Error".mysqli_connect_error());


?>