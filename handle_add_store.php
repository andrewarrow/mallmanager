<?php

$mystuff = "SELECT * FROM    MALLMANAGER";
$link = mysqli_connect("localhost", "root", "root", "mallmanager");
$floornumber = mysqli_real_escape_string($link, $_POST['floornumber']);
$store = mysqli_real_escape_string($link, $_POST['store']);
 
$sql = "INSERT INTO MALLMANAGER (floornumber, store) VALUES ('" . $floornumber . "', '". $store . "');";
if(mysqli_query($link, $sql)){
    header( "Location:/index.php" ) ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 

?>


 
