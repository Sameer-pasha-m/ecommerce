<?php
$SERVER="localhost";
$username= "root";
$password= "";
$database= "ecommerce";
$conn =new mysqli($SERVER,$username,$password,$database);
if ($conn->connect_error) {
    die("error". $conn->connect_error);
}
else {
    echo"success";
}


?>