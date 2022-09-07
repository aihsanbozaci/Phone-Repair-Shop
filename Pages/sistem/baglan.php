<?php

try{
    $baglan = new PDO("mysql:host=localhost;dbname=finalproje;charset=UTF8","root","");

}

catch(PDOException $error){
    die($e->getMessage());

}



?>