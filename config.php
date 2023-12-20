<?php
$servername = "localhost";
$username = "id21666431_qbstusername";
$password = "***";
$database = "id21666431_qbstdb";
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "water";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection Failed");
// $conn = mysqli_connect($servername, $username, "", $database) or die("Connection Failed");
    if(!$conn){
        die("Sorry we failed to connect: " .mysqli_connect_error());
    }
?>
