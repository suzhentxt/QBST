<?php
$servername = "localhost";
$username = "id21666431_qbstusername";
$password = "******";
$database = "id21666431_qbstdb";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection Failed");
    if(!$conn){
        die("Sorry we failed to connect: " .mysqli_connect_error());
    }
?>
