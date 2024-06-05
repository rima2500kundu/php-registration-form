<?php
$databaseHost = 'localhost';
$databaseName = 'tutorials';
$databaseUser = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseName, $databaseUser, $databasePassword);

// if(!$mysqli){
//     die("error detected".mysqli_error($mysqli));
// } else{
//     echo "connection established successfully";
// }

?>