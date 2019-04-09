<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrapv2.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/font-awesome.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/master.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Puskesmas Mlati I</title>
    <link href="assets/images/icon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/sweetalert.css" media="screen" title="no title">
    <script src="assets/js/sweetalert.min.js" charset="utf-8"></script>
    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.mins.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <!-- header -->
    <header class="main-header">
      <nav class="navbar navbar-static-top navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <i class="fa fa-bars"></i>
            </button>
            <a href="index.php" class="navbar-brand">
              <b>SIPKesmas</b> Puskesmas Mlati I
            </a>
          </div>

          <div id="navbar" class="collapse navbar-collapse">
          <!-- Navbar Right Menu -->
            <ul class="nav navbar-nav navbar-right">
              <!-- navbar login -->
              <li>
                  <a href="?f=pendaftaran" class="dropdown-toggle" data-toggle="">
                    <div class="fa fa-user"></div> Pendaftaran
                  </a>
              </li>
              <li>
                <a href="?f=cekantrian" class="dropdown-toggle" data-toggle="">
                  <div class="fa fa-search"></div> Cek Status Antrian
                </a>
              </li>
              <li>
                  <a href="?f=pengaduan" class="dropdown-toggle" data-toggle="">
                    <div class="fa fa-phone"></div>  Kontak Kami
                  </a>
              </li>
              <li>
                <a href="?f=tentangkami" class="dropdown-toggle" data-toggle="">
                  <div class="fa fa-group"></div> Tentang Kami
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
       </nav>
      <div class="container bg-hd" align="center">
        <img class="img-responsive" src="assets/images/header.png" alt="">
      </div>
    </header>
    <!-- isi -->
    <div class="jumbotron">
      <?php
      //error_reporting(0);
      $mod = $_GET['f'];
      if(file_exists('view/'.$mod.'.php')){
        include 'view/'.$mod.'.php';
      } else {
        include 'view/infopage.php';
      }
      ?>
    </div>
    <!-- footer -->
    <footer align="center "class="container" style="margin-top:32px">
      <a class="warna-link" href="http://bit.ly/PuskesmasMlatiI"><p>Puskesmas Mlati I, Jalan Intan, Kutu Tegal, Sinduadi, Mlati, Kabupaten Sleman, Yogyakarta</p></a>
      <p class="medium">&copy; Copyright <a class="warna-home"href="#">SIPKesmas</a> 2018</p>
    </footer>
  </body>
</html>
