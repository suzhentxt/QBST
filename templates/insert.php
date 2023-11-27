<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $ph = $_GET['ph'];
    $wqi = $_GET['wqi'];
    $streamflow = $_GET['streamflow'];
    $tds = $_GET['tds'];

    include 'config.php';

    $sql = "INSERT INTO `mywater` (`id`, `ph`, `wqi`, `streamflow`, `tds`, `time`) VALUES (NULL, '$ph', '$wqi', '$streamflow', '$tds', current_timestamp())";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    
    if($result){
        echo "Inserted Succefully";
    }

}

?>