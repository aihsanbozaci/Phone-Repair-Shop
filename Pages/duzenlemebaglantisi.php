<?php

include("sistem/db.php");
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$tcno=$_POST["tcno"];
$birthdate=$_POST["birthdate"];
$gender=$_POST["gender"];
$telno=$_POST["telno"];
$emailid=$_POST["emailid"];
$job=$_POST["job"];
$adres=$_POST["adres"];
$birim=$_POST["birim"];
$info=$_POST["info"];
$kayittarihi=$_POST["kayittarihi"];
$id=$_POST["id"];


if($firstname<>""&&$last_name<>""&&$validID<>""&&$birthday<>""&&$gender<>""&&$telno<>""&&$email<>""&&$job<>""&&$adres<>""&&$bilgi<>""){
    if ($link->query("UPDATE kayit SET firstname = '$firstname', lastname = '$lastname', tcno = '$tcno', birthdate = '$birthdate', gender = '$gender', telno = '$telno', emailid = '$emailid', job = '$job', adres = '$adres', birim = '$birim', info = '$info', kayittarihi = '$kayittarihi' WHERE id =  ".$id))
    {
$durum="Başarılı şekilde düzenlendi!";
echo "<script type='text/javascript'>alert('$durum');</script>";
header("refresh:0;url=listele.php");
    }
    else
    {
        $durum="Düzenlenemedi!";
        echo "<script type='text/javascript'>alert('$durum');</script>";
        header("refresh:0;url=listele.php?durum=$durum");
        
    }
}
else{
    $durum="Düzenlenemedi!";
    echo "<script type='text/javascript'>alert('$durum');</script>";
    header("refresh:1;url=listele.php?durum=$durum");

}
?>