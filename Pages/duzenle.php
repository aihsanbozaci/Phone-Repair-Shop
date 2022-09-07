
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
                               
<?php
$sorgu = $link->query("SELECT * FROM kayit WHERE id=".(int)$_GET['id']);
$sonuc = $sorgu->fetch_assoc();
?>

  <title>Kayıt Formu</title>


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

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Düzenleme Formu</h1>
          <h2>Buradan alt tabloyu eksiksiz bir şekilde doldurarak şikayet kaydını güncelleyebilirsiniz.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
          
          <a href="#bos" class="btn btn-primary btn-lg">Başlayalım</a>
            <a href="https://youtu.be/VtvjbmoDx-I" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Videoyu İzle</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/why-us.png" class="img-fluid animated" alt="">  
        </div>
      </div>
      
      <div id="bos"></div>
    </div>
  </section>
  
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<form method="POST" action="duzenlemebaglantisi.php" class="form-horizontal">
<input id="id" hidden name="id" value="<?= $sonuc['id']?>">
<fieldset>

<br>
<br>
<br>




<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Müşteri Adı</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="Ad giriniz" class="form-control input-md" required value="<?php echo $sonuc['firstname'];?>">
<br>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Müşteri Soyadı</label>  
  <div class="col-md-4" >
  <input id="lastname" name="lastname" type="text" placeholder="Soyad giriniz" class="form-control input-md" required value="<?php echo $sonuc['lastname'];?>">
  <br>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="tcno">TC. Kimlik Numarası</label>  
  <div class="col-md-4">
  <input id="tcno" name="tcno" type="number" placeholder="Yalnızca sayı giriniz" class="form-control input-md" required value="<?php echo $sonuc['tcno'];?>">
  </div>
</div>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="birthdate">Ürünün Garanti Başlangıcı</label>
  <div class="col-md-4">
  <input class="form-control" type="date" name="birthdate" id="birthdate" required value="<?php echo $sonuc['birthdate'];?>">
  </div>
</div>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="gender">İşletim Sistemi</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="gender" id="radios-0" value="IOS" checked="checked">
      IOS
    </label>
	</div> 
  
  
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="gender" id="radios-1" value="Android" >
      Android
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input type="radio" name="gender" id="radios-2" value="Diğer">
      Diğer
    </label>
	</div>
  </div>
</div>
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="address2">Ürün Model İsmi</label>  
  <div class="col-md-4">
  <input id="job" name="job" type="text" placeholder="Model belirtiniz" class="form-control input-md" required value="<?php echo $sonuc['job'];?>">
<br>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="telno">Telefon Numarası</label>  
  <div class="col-md-4">
  <input id="telno" name="telno" type="number" placeholder="(5xx) xxx xx xx" class="form-control input-md" required value="<?php echo $sonuc['telno'];?>">
<br>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="emailid">E-Posta</label>  
  <div class="col-md-4">
  <input id="emailid" name="emailid" type="text" placeholder="E-posta giriniz" class="form-control input-md" required value="<?php echo $sonuc['emailid'];?>">
  <br>
  </div>
</div>






<div class="form-group">
  <label class="col-md-4 control-label" for="address2">Adres Satırı</label>  
  <div class="col-md-4">
  <input id="adres" name="adres" type="text" placeholder="Açık adres giriniz" class="form-control input-md" required>
<br>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="birim">Şikayet Türü</label>
  <div class="col-md-4" >
    <select id="birim" name="birim" class="form-control" multiple="multiple" required>
      <option value="Hasar">Kırık/Çatlak Onarım</option>
      <option value="Yazılımsal Sorunlar">Yazılımsal Sorunlar</option>
      <option value="Donanımsal Sorunlar">Donanımsal Sorunlar</option>
      <option value="Veri Kayıpları">Veri Kayıpları</option>
    </select>
  </div>
</div>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="info">Şikayetiniz Hakkında Açıklama</label>  
  <div class="col-md-4">
  <textarea id="info" name="info" type="text" placeholder="<?php echo $sonuc['info'];?>" class="form-control input-md" required ></textarea>
  </div>
</div>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="kayittarihi">Kayıt Tarihi</label>
  <div class="col-md-4">
  <input class="form-control" type="date" name="kayittarihi" id="kayittarihi" required>
  </div>
</div>

<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="kaydet"></label>
  <div class="col-md-4">
    <button type="submit" id="kaydet" name="kaydet" class="btn btn-primary">Kaydet</button>
  </div>
</div>

</fieldset>
</form>

  
  <footer id="footer">

  <div class="footer-top">
  <div class="container">
  <div class="row">
  
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