<!-- created by: Roy Andri Jumat, 13-07-2018 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrapv2.css" media="screen" title="no title">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="../assets/css/font-awesome.css" media="screen" title="no title">
    <link rel="stylesheet" href="../assets/css/sweetalert.css" media="screen" title="no title">
    <script src="../assets/js/sweetalert.min.js" charset="utf-8"></script>
    <title>Puskesmas Mlati I</title>
    <link href="../assets/images/icon/favicon.png" rel="shortcut icon" type="image/x-icon">
    <script src="../assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <style media="screen">
    body{
      background-image: url('../assets/images/background.jpg') !important;
      background-size: cover;
    }
  </style>
  <body>
    <?php include '../backend/login.php'; ?>
    <?php include '../admin/backend/cekusername.php'; ?>
    <?php include '../admin/backend/cekjawaban.php'; ?>
    <?php include '../admin/backend/ubahpassword.php'; ?>
        <div class="row" style=" margin-top:5px; margin-right:0px; margin-left:0px;">
          <div class="col-md-9">
              <img  style="margin-top:70px; margin-left:5px;"class="img-responsive img-thumbnail text-center" src="../assets/images/welcome.jpg">
          </div>
          <div class="col-md-3" >
            <div class="text-right" style="background-color:#E9ECEF; border-radius:5px; height:98vh;">
              <img class="img-responsive" src="../assets/images/header.png">
              <br>
              <!-- form login -->
              <form action="" method="post">
              <div id="datalogin" class="datalogin">
                <div style="padding:15px;">
                  <div  style=" margin-top:5px;">
                    <input type="text" style="height:40px;" class="form-control"  Placeholder="Nama Pengguna" name="username"  required>
                  </div>
                  <div  style=" margin-top:10px;">
                    <input type="password" style="height:40px;" class="form-control"  Placeholder="Sandi" name="password" required>
                    <?php
                    $angka1 = (rand()%9);
                    $angka2 = (rand()%9);
                    ?>
                  </div>
                  <div  style=" margin-top:10px;">
                    <p style="font-size:14px;" class="text-left"><?php echo $angka1 ?> ditambah <?php echo $angka2 ?> jadi berapa?</p>
                    <input type="hidden" name="angka1" value="<?php echo $angka1 ?>">
                    <input type="hidden" name="angka2" value="<?php echo $angka2 ?>">
                  </div>
                  <div style=" margin-top:0px;">
                    <input type="text" class="form-control" style="height:40px;" Placeholder="Jawaban" name="jawaban" required>
                  </div>
                  <div style=" margin-top:12px;">
                    <button type="submit" class="form-control btn" style="background-color:#205E32; color:white; height:40px;" name="login">Masuk</button>
                  </div><br>
                  <p id="lupa" class="text-center"><a style="color:black; font-size:14px;" href="#">Lupa Kata Sandi ?</a></p>
                </div>
              </div>
            </form>
              <!-- akhir form login -->
              <!-- form cek username -->
              <form action="" method="post">
              <div id="datauname" class="datauname" style="display:none;">
                <div style="padding:15px;">
                  <div  style=" margin-top:5px;">
                    <input type="text" id="unm" style="height:40px;" class="form-control"  Placeholder="Nama Pengguna" name="uname1" required>
                  </div>
                  <div style=" margin-top:12px;">
                    <button type="submit" class="form-control btn" style="background-color:#205E32; color:white; height:40px;" name="lanjut1">Berikutnya</button>
                  </div><br>
                  <p id="batal1" class="text-center"><a style="color:black; font-size:14px;" href="#">Batal</a></p>
                  <div id="warn" style="display:none;" class="alert alert-danger text-left" style="margin-left:5px; margin-right:5px;">
                    <strong>Nama pengguna</strong> tidak ditemukan !
                  </div>
                </div>
              </div>
            </form>
              <!-- akhir form cek username -->
              <!-- form cek pertanyaan -->
              <form action="" method="post">
              <div id="datapertanyaan" class="datapertanyaan" style="display:none;">
                <div style="padding:15px;">
                  <div  style=" margin-top:5px;">
                    <input type="text" readonly style="height:40px;" class="form-control" value="<?php echo $uname ?>" Placeholder="Nama Pengguna" name="uname2" required>
                  </div>
                  <div  style=" margin-top:5px;">
                    <p class="text-left"><?php echo $pert; ?></p>
                  </div>
                  <div  style=" margin-top:5px;">
                    <input type="text" style="height:40px;" class="form-control"  Placeholder="Jawaban Anda" name="jawab" required>
                  </div>
                  <div style=" margin-top:12px;">
                    <button type="submit" class="form-control btn" style="background-color:#205E32; color:white; height:40px;" name="lanjut2">Berikutnya</button>
                  </div><br>
                  <p id="batal2" class="text-center"><a style="color:black; font-size:14px;" href="#">Batal</a></p>
                  <div id="warn2" style="display:none;" class="alert alert-danger text-left" style="margin-left:5px; margin-right:5px;">
                    <strong>Jawaban</strong> yang anda masukan salah !
                  </div>

                </div>
              </div>
            </form>
              <!-- akhir form cek pertanyaan -->
              <!-- form ganti password -->
              <form action="" method="post">
              <div id="datapasswordbaru" class="datapasswordbaru" style="display:none;">
                <div style="padding:15px;">
                  <div  style=" margin-top:5px;">
                    <input type="text" readonly style="height:40px;" class="form-control" value="<?php echo $uname2 ?>" Placeholder="Nama Pengguna" name="uname3"  required>
                  </div>
                  <div  style=" margin-top:5px;">
                    <input type="password"  style="height:40px;" class="form-control"  Placeholder="Kata Sandi Baru" name="katasandibaru" id="katasandibaru"  required>
                  </div>
                  <div  style=" margin-top:5px;">
                    <input type="password" style="height:40px;" class="form-control"  Placeholder="Konfirmasi Kata Sandi" name="konfirmasisandi" oninput="Cek()" id="konfirmasisandi" >
                    <span class="label label-success" id="cocok" style="display:none">Cocok</span>
                    <span class="label label-danger" id="salah" style="display:none">Salah</span>
                  </div>
                  <div style=" margin-top:12px;">
                    <button type="submit" class="form-control btn" style="background-color:#205E32; color:white; height:40px;" name="lanjut3">Berikutnya</button>
                  </div><br>
                  <p id="batal3" class="text-center"><a style="color:black; font-size:14px;" href="#">Batal</a></p>
                </div>
              </div>
            </form>
              <!-- akhir form ganti password -->
              <div class="text-center"><br><br><br><br><br><br>
                <strong><b>SIPK</b>esmas © 2018</strong>
              </div>
            </div>
          </div>
        </div>

    <script>
    $(document).ready(function(){
      $(document).on('click', '#lupa', function(e){
        e.preventDefault();
        $('#datauname').show(500);
        $('#datalogin').hide();
        $('#warn').hide();
      });
      $(document).on('click', '#batal1', function(e){
        e.preventDefault();
        $('#datauname').hide();
        $('#datalogin').show(500);
        $('#datapertanyaan').hide();
        $('#warn').hide();
        $('#unm').val('');
      });
      $(document).on('click', '#batal2', function(e){
        e.preventDefault();
        $('#datauname').hide();
        $('#datapertanyaan').hide();
        $('#datalogin').show(500);
        $('#warn').hide();
      });
      $(document).on('click', '#batal3', function(e){
        e.preventDefault();
        $('#datapasswordbaru').hide();
        $('#datauname').hide();
        $('#datapertanyaan').hide();
        $('#datalogin').show(500);
        $('#warn').hide();
        $('#warn2').hide();
      });
    })
    function Cek() {
      if(document.getElementById('katasandibaru').value==document.getElementById('konfirmasisandi').value){
        $("#cocok").show();
        $("#salah").hide();
      }else{
        $("#salah").show();
        $("#cocok").hide();
      }
    }
    </script>
  </body>
</html>
