<?php
 
$server = "localhost";
$database = "local";
$username = "root";
$parola = "";
 
// conectarea la serverul MySQL
$connect = mysqli_connect($server,$username,isset($password)) or die( mysql_error() );
 
// selecteaza baza de date test
$db = mysqli_select_db($connect, $database) or die( mysqli_error($connect) );
?>