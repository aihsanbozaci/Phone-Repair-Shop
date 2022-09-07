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

?>
<?php
include("sistem/baglan.php");
$kayit = $baglan->query('SELECT * FROM time_log')->fetchAll(PDO::FETCH_ASSOC);
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
                               

  <title>Log Defteri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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
          <li><a class="nav-link scrollto" href="ekle.php">Kişi Ekle</a></li>
          <li><a class="nav-link scrollto" href="listele.php">Kişileri Listele</a></li>
          <li><a class="nav-link   scrollto" href="logs.php">Loglar</a></li>
          <li><a class="nav-link scrollto" href="kullanicibilgileri.php">Şifre Değiştir</a></li>
          <li><a class="getstarted scrollto" href="logout.php">Çıkış</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>


  <table class="table" border="5" align="center">
    <thead class="thead-light">
<tr>
<br><br><br><br><br>
</tr>
<th>id</th>
<th>IP Adresi</th>
<th>Kullanıcı Adı</th>
<th>Giriş Saati</th>
<th>Çıkış Saati</th>
<th>Kullandığı Tarayıcı</th>
</tr>


<?php
foreach ($kayit as $kayit) : ?>
<tbody>
    <tr>
    <td><?= $kayit['id'] ?></td>
    <td><?=$kayit['ip_address']?></td>
    <td><?=$kayit['username']?></td>
    <td><?=$kayit['giris']?></td>
    <td><?=$kayit['cikis']?></td>
    <td><?=$kayit['tarayici']?></td>
    </tr>  
</tbody>

   <?php
endforeach;
    ?>


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