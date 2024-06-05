<?php
$databaseHost = 'localhost';
$databaseName = 'tutorials';
$databaseUser = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUser, $databasePassword, $databaseName); // keep maintain the squence otherwise there will be an error.

// if(!$mysqli){
//     die("error detected".mysqli_error($mysqli));
// } else{
//     echo "connection established successfully";
// }

?>