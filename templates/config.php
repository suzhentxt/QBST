<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "water";

$conn = mysqli_connect($servername, $username, "", $database) or die("Connection Failed");
    if(!$conn){
        die("Sorry we failed to connect: " .mysqli_connect_error());
    }
?>
