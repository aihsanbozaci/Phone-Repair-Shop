<?php
$durum = "";
include("pages/sistem/baglan.php");
if ($durum) {
    echo "<script>
    alert(\"$durum\");
    </script>";
}
?>
<!doctype html>
<html>

<head>

    <style>
        .g-recaptcha {
            padding-left: 2%;
        }

        .footer {
            margin-top: 10%;
            background-color: #414E7D;
            color: white;

        }

        .navbar {
            background-color: #414E7D;
        }

        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #B0BEC5;
            background-repeat: no-repeat;
            background-color: white;

        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px
        }

        .card2 {
            margin: 0px 40px
        }

        .logo {
            width: 100px;
            height: 102px;
            margin-top: 20px;
            margin-left: 35px
        }

        .image {
            width: 360px;
            height: 280px
        }

        .border-line {
            border-right: 1px solid #EEEEEE
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

        .or {
            width: 10%;
            font-weight: bold
        }

        .text-sm {
            font-size: 14px !important
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-right: 45%;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-primary {

            width: 150px;
            color: blue;
            border-radius: 2px
        }

        .btn-blue:hover {
            background-color: #5274E2;
            cursor: pointer;
        }

        .bg-blue {
            color: red;
            background-color: #1A237E
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px
            }

            .image {
                width: 300px;
                height: 220px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px
            }
        }
    </style>



    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Giriş Ekranı</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>


</head>

<body oncontextmenu='return false' class='snippet-body'>

    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="#">Hoş Geldiniz!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto"></ul>

            <span class="navbar-text">
                Yönetici Giriş Paneli
            </span>
        </div>
    </nav>

    <div class="row d-flex">
        <div class="col-lg-6">
            <div class="card1 pb-5">
                <div class="row"> <img src="pages/assets/img/comu_logo_3.png" class="logo"> </div>
                <br><br> <br> <br>

                <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="pages/assets/img/logincalisma3.png" class="image"> </div>


            </div>
        </div>
        <div class="col-lg-6">
            <div class="card2 card border-0 px-4 py-5">

            </div>
            <div class="row px-3 mb-4">


            </div>

            <div>

            </div>
            <form action="pages/yonlendir.php" method="post" onsubmit="return submitUserForm();">
                <div class="container login-container">
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Kullanıcı Adı</h6>
                        </label> <input class="mb-4" type="text" name="username" placeholder="Kullanıcı Adınızı Giriniz" required> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Şifre</h6>
                        </label> <input type="password" name="password" placeholder="Şifrenizi giriniz" required> </div>
                    <div class="row px-3 mb-4">
                        <?php $messages[0] = "Hatalı kullanıcı adı veya şifre!";
                        if (isset($_GET['message'])) {
                            echo $messages[$_GET['message']];
                        } ?>
                        <br>

                    </div>
                </div>



                <input type="submit" value="Giriş" class="btn btn-primary">

            </form>


        </div>
    </div>
    </div>
    </form>


</body>
<footer class="footer">
    <div class="py-4">
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. Tüm hakları saklıdır.</small>
            <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
        </div>
    </div>

</footer>








</html>