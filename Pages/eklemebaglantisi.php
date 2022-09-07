<?php

include("sistem/baglan.php");
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



if($firstname<>""&&$lastname<>""&&$tcno<>""&&$birthdate<>""&&$gender<>""&&$telno<>""&&$emailid<>""&&$job<>""&&$adres<>""&&$birim<>""&&$info<>""&&$kayittarihi<>""){
    if ($baglan->query("INSERT INTO kayit(firstname,lastname,tcno,birthdate,gender,telno,emailid,job,adres,birim,info,kayittarihi)
                    VALUES('$firstname','$lastname','$tcno','$birthdate','$gender','$telno','$emailid','$job','$adres','$birim','$info','$kayittarihi')"))
    {
$durum="Veri Eklendi!";
echo "<script type='text/javascript'>alert('$durum');</script>";
header("refresh:2;url=ekle.php?durum=$durum");
    }
    else
    {
        $durum="Veri Eklenemedi!";
        echo "<script type='text/javascript'>alert('$durum');</script>";
        header("refresh:0;url=ekle.php?durum=$durum");
        
    }
}
else{
    $durum="Alanlari Doldurun!";
    echo "<script type='text/javascript'>alert('$durum');</script>";
    header("refresh:1;url=ekle.php?durum=$durum");

}
?>