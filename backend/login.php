<?php
//membuka Session
session_start();

if(isset($_SESSION['sudah_login'])){
  ?>
  <script type="text/javascript">
    window.location='../admin/index.php';
  </script>
  <?php
}else {
  include_once '../config/dbconfig.php';

  $username ="";
  $password ="";
  $posisi ="";

  if(isset($_POST['login'])){
    $cekPassword ="";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $a1 = $_POST['angka1'];
    $a2 = $_POST['angka2'];
    $a3 = $a1+$a2;
    $jawaban = $_POST['jawaban'];
    if ($jawaban != $a3) {
      ?>
      <script type="text/javascript">
      swal({
                      title: "",
                      text: "Captcha yang Anda masukan salah !",
                      type: "warning",
                      confirmWarningText: "Oke"
                  },
                  function () {
                      window.location='../admin/index.php';
                  });
      </script>
      <?php
    }else{
      $query = "SELECT * FROM login WHERE username='".$username."'";
      $hasil = mysqli_query($koneksi, $query);

      if(mysqli_num_rows($hasil)>0){
        while ($data=mysqli_fetch_assoc($hasil)) {
          $id_login = $data['id_login'];
          $cekPassword = $data['password'];
          $posisi = $data['posisi'];
        }
      $testPassword = MD5($password);
      // menguji apakah nilai variabel testPassword sama dengan nilai variabel cekPassword
      if($cekPassword == $testPassword){
        $pos = "SELECT * FROM hak_akses WHERE id_hak_akses='".$posisi."'";
        $hsl = mysqli_query($koneksi, $pos);
        while ($dt=mysqli_fetch_assoc($hsl)) {
          $akses = $dt['nama_hak_akses'];
        }
        //jika iya
        //menyimpan data kedalam Session
        $_SESSION['id_login'] = $id_login;
        $_SESSION['username'] = $username;
        $_SESSION['posisi'] = $akses;
        $_SESSION['sudah_login'] = true;
        ?>
        <script type="text/javascript">
        swal({
                        title: "",
                        text: "Selamat Datang <?php echo $username ?>!",
                        type: "success",
                        confirmWarningText: "Oke"
                    },
                    function () {
                        window.location='../admin/index.php';
                    });
        </script>
  <?php
  }else {
    //jika tidak sesuai
    ?>
    <script type="text/javascript">
      swal("Password salah","Silahkan periksa kembali password anda","error");
    </script>
    <?php
  } // else cek password
  }else {
    //jika hasil kurang dari nol, peringatan
    ?>
    <script type="text/javascript">
    swal("Username tidak ditemukan","Silahkan periksa kembali username anda","error");
    </script>
    <?php
        }
    } //isset login  
    }
} //else isset sudah login
 ?>
