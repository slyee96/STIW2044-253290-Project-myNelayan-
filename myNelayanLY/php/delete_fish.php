<?php
error_reporting(0);
include_once("dbconnect.php");
$fishid = $_POST['fishid'];
$sql     = "DELETE FROM FISH WHERE FISHID = $fishid";
    if ($conn->query($sql) === TRUE){
        echo "success";
    }else {
        echo "failed";
    }

$conn->close();
?>