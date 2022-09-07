
<!DOCTYPE html>
<html lang="en">
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

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                               

  <title>Ana Sayfa</title>
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
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"> HOŞ GELDİNİZ </h1>
      <style>
      .me-auto{
        color: white;
        margin-top: 3px;
      }  
      </style>
  
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

    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Admin Paneline Hoş Geldiniz!</h1>
          <h2>Buradan üst menüyü kullanarak sitenin çeşitli kısımlarında çeşitli işlemler yapabilirsiniz.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="kullanicibilgileri.php" class="btn-get-started scrollto">Kullanıcı İşlemleri</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

 
    
  

  <footer id="footer">



  <div class="footer-top">
  <div class="container">
  <div class="row">
    
  <img src="http://www.mgm.gov.tr/sunum/sondurum-show-2.aspx?m=CANAKKALE&rC=111&rZ=fff" style="width:140px; height:100px;" alt="ÇANAKKALE" /><img src="http://www.mgm.gov.tr/sunum/tahmin-show-2.aspx?m=CANAKKALE&basla=1&bitir=5&rC=111&rZ=fff" style="width:400px; height:100px;" alt="CANAKKALE" />
</div>

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