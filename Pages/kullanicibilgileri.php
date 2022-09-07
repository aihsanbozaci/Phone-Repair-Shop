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
$durum="";
include("sistem/db.php");
if($durum){
    echo"<script>
    alert(\"$durum\");
    </script>";
}
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
  <title>Şifre Değiştirme Paneli</title>
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
  <link href="assets/css/style3.css" rel="stylesheet">
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
<form action="sifredegistir.php" method="post">
<input hidden name="id" value="<?php echo $sonuc['id'] ?>">
  <div class="imgcontainer">
    <img src="assets/img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Kullanıcı Adı</b></label>
    <input type="text"  placeholder="Kullanıcı Adınızı Giriniz" required>

    <label for="password"><b>Yeni Şifre</b></label>
    <input type="password" placeholder="Yeni Şifrenizi Giriniz"  name="password" required>
        
    <button type="submit">Şifreyi değiştir</button>
  </div>
</form>
</section>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.container{
    color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
background-color:teal;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 50px;
}

button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 30%;

}


span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>




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