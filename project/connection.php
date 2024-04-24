<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "theater";
$conn= new mysqli($host,$user,$pass,$db_name);
if ($conn->connect_error){
    echo "Failed to connect to db".$conn->connect_error; 
}


?>