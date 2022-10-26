<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lotans_db";

//create connection to database
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection to database

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
 echo "connection successfully";
