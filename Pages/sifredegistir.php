<?php
$username=$_POST["id"];
$baglanti = new mysqli("localhost", "root", "", "finalproje");

$password=$_POST['password'];




if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");
if($username<>""&&$password<>""){
$sorgu = $baglanti->query("UPDATE kullanici SET password = '$password' WHERE id");

if ($baglanti->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $baglanti->error);
}

if ($baglanti->affected_rows > 0) {
    $durum="Başarılı şekilde değiştirildi!";
    echo "<script type='text/javascript'>alert('$durum');</script>";
    header("refresh:0;url=logout.php?durum=$durum");
} else {
    echo "Herhangi bir kayıt güncellenemedi.";
}

$baglanti->close();
}
?>