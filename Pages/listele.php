
<?php
$referer = $_SERVER['HTTP_REFERER']; 

if ($referer == "") 
{ 
echo "GİRİŞ YAPMALISINIZ!"; 
header("Refresh: 0; url=../index.php");
ob_end_flush();
} 

else 
{ 

} 
include("sistem/baglan.php");
$kayit = $baglan->query('SELECT * FROM kayit')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html> 
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
  <title>Kişi Listesi</title>
  
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style2.css" rel="stylesheet">
<style>
.footerblue{
  color: #414E7D;
}

</style>

</head>

<body>


  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      


      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="kontrol.php">Anasayfa</a></li>
          <li><a class="nav-link scrollto" href="ekle.php">Kayıt Ekle</a></li>
          <li><a class="nav-link scrollto" href="listele.php">Kayıtları Listele</a></li>
          <li><a class="nav-link   scrollto" href="logs.php">Loglar</a></li>
          <li><a class="nav-link scrollto" href="kullanicibilgileri.php">Şifre Değiştir</a></li>
          <li><a class="getstarted scrollto" href="logout.php">Çıkış</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


      <?php require_once 'sistem/baglan.php'; ?>
<form class="search-form" method="GET" action="">
   <div style="margin-left: 250%;" id="arama" >
   <input type="text" name="kelime" id="search" placeholder="Ara..">
       <br> <br>
       <input type="submit" value="Sorgula">
   </div>
</form>
<hr>
<?php
if($_GET){
  $kelime = $_GET['kelime'];
    if(!$kelime){
        echo "<p style='color:White; '>Aramak için değer giriniz.";
    }
    else{
        $sorgu=$baglan->prepare("SELECT * FROM kayit WHERE firstname LIKE :firstname");
        $sorgu->execute(array(':firstname' => $kelime.'%')); 
        if($sorgu->rowCount()){
          foreach($sorgu as $row){
          
              echo "<p style='color:White; margin-right:50px;'>  (".$sorgu->rowCount().") adet sonuç bulundu:"; 
              echo "<br>";
              echo $row['id']." numaralı müşteri: ". $row['firstname']." ".$row['lastname'] ;
              
          }
      }
        $sorgu=$baglan->prepare("SELECT * FROM kayit WHERE tcno LIKE :tcno");
        $sorgu->execute(array(':tcno' => '%'.$kelime)); 
        if($sorgu->rowCount()){
          foreach($sorgu as $row){
          
              echo "<p style='color:White; margin-right:50px;'> (".$sorgu->rowCount().") adet sonuç bulundu:"; 
              echo "<br>";
              echo $row['id']." numaralı müşteri: ". $row['firstname']." ".$row['lastname'] ;
          }
      }
      $sorgu=$baglan->prepare("SELECT * FROM kayit WHERE lastname LIKE :lastname");
      $sorgu->execute(array(':lastname' => '%'.$kelime)); 
      if($sorgu->rowCount()){
        foreach($sorgu as $row){
        
            echo "<p style='color:White; margin-right:50px;'> (".$sorgu->rowCount().") adet sonuç bulundu:"; 
            echo "<br>";
            echo $row['id']." numaralı müşteri: ". $row['firstname']." ".$row['lastname'] ;
        }
    }
    }
}
?>

    
  </header>

 
  <table class="table" border="5" align="center"> 
    <thead class="thead-light">
<tr>
<br><br><br><br><br>
</tr>
<th>ID</th>
<th>Müşteri Adı</th>
<th>Müşteri Soyadı</th>
<th>T.C Kimlik No</th>
<th>Garanti Başlangıç Tarihi</th>
<th>İşletim Sistemi</th>
<th>Ürün Model İsmi</th>
<th>Telefon numarası</th>
<th>E-Posta</th>
<th>Adres</th>
<th>Şikayet Türü</th>
<th>Şikayet Metni</th>
<th>Kayıt Tarihi</th>
<th>#Düzenle#</th>
<th>#Sil#</th>
</tr>


<?php
foreach ($kayit as $kayit) : ?>
<tbody>
    <tr>
    <td><?= $kayit['id'] ?></td>
    <td><?=$kayit['firstname']?></td>
    <td><?=$kayit['lastname']?></td>
    <td><?=$kayit['tcno']?></td>
    <td><?=$kayit['birthdate']?></td>
    <td><?=$kayit['gender']?></td>
    <td><?=$kayit['job']?></td>
    <td><?=$kayit['telno']?></td>
    <td><?=$kayit['emailid']?></td>
    <td><?=$kayit['adres']?></td>
    <td><?=$kayit['birim']?></td>
    <td><?=$kayit['info']?></td>
    <td><?=$kayit['kayittarihi']?></td>
    <td><a href="duzenle.php?id=<?= $kayit['id']; ?>" name="editbtn" class="btn btn-primary">Düzenle</a></td>
    <td><a href="sil.php?id=<?= $kayit['id'];?>" name="deletebtn" class="btn btn-danger">Sil</a></td>
    </tr>  
</tbody>

   <?php
endforeach;
    ?>
   
</table>

  </section>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  
  <footer id="footer">

  <div class="col-lg-3 col-md-6 footer-contact">
          </div>
      
        </div>
      </div>
    </div>
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright 2021 Tüm hakları saklıdır.
      </div>
      <div class="credits">

          <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

 
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>