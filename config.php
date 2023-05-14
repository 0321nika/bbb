<?php
 
$databaseHost = 'localhost';
$databaseName = 'nika';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
mysqli_set_charset($mysqli,'utf8');

?>
