<?php
 

$servername = "localhost";
$username = "1417304";
$password = "123456";
$dbname = "db1417304";
 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

 
