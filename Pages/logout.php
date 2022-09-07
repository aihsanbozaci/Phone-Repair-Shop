<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'finalproje';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
  
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$lastID =$con->query("SELECT MAX(id) FROM time_log");
$id = $lastID->fetch_assoc();
$cikisid=array_values($id)[0];
$now = date_create()->format('Y-m-d H:i:s');
$con->query("UPDATE time_log SET cikis = '$now' WHERE id=".$cikisid);
header('Location: ../index.php');
?>