<?php 
include("sistem/baglan.php");
if ($_GET) {

if ($baglan->query("DELETE FROM kayit WHERE id=".(int)$_GET['id'])) 
{
    header("location:listele.php"); 
}
}
?>