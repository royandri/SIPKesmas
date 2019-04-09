<!-- created by: Roy Andri Minggu, 15-07-2018 -->
<?php
include_once '../config/dbconfig.php';

if(isset($_POST['ubah_akun'])){
  $idlogin2 = $_POST['idlogin2'];
  $username2 = $_POST['username2'];
  $password2 = $_POST['password2'];
  $hak_akses2 = $_POST['hakakses2'];
  $pertanyaan = $_POST['pertanyaan'];
  $jawaban = $_POST['jawaban'];

  $status="";
  $usr = "SELECT username FROM login where id_login='$idlogin2'";
  $cekusr = mysqli_query($koneksi, $usr);
  while ($us = mysqli_fetch_object($cekusr)) {
    $usrname = $us->username;
  }
  if ($username2 == $usrname) {
    $status = "diubah";
  }

  $cekusername = "SELECT username from login where username = '$username2'";
  $prosescek = mysqli_query($koneksi, $cekusername);
  if(mysqli_num_rows($prosescek) > 0 && $status != "diubah"){
    ?>
    <script type="text/javascript">
     swal({
       title: "",
       text: "Username <?php echo $username2?> sudah digunakan",
       type: "error",
       confirmWarningText: "Oke"
     },
     function () {
       window.location='?p=pengaturanakun#';
     });
   </script>
    <?php
  }else{
    // mengecek apakah ada perubahan password
    $pwd = "SELECT password from login where id_login='$idlogin2'";
    $pw = mysqli_query($koneksi,$pwd);
    while ($ps = mysqli_fetch_object($pw)) {
      $pass = $ps->password;
    }
    // kalo tidak ada perubahan maka password tetap
    if ($password2 == $pass) {
      $newPass2 = $password2;
      // kalo berubah berarti password di enkripsi lagi
    }else {
      $newPass2 = md5($password2);
    }
    $usr = "SELECT username FROM login where id_login='$idlogin2'";
    $cekusr = mysqli_query($koneksi, $usr);
    while ($us = mysqli_fetch_object($cekusr)) {
      $usrname = $us->username;
    }
    if ($username2 == $usrname) {
      // code...
    }

    // mengambil data hak akses
    $hakakses2 = "SELECT id_hak_akses from hak_akses WHERE nama_hak_akses = '$hak_akses2'";
    $id_hak2 = mysqli_query($koneksi, $hakakses2);
    while ($id2 = mysqli_fetch_object($id_hak2)) {
      $id_akses2 = $id2->id_hak_akses;
    }

    // mengubah data akun

    $usr = "SELECT username FROM login where id_login='$idlogin2'";
    $cekusr = mysqli_query($koneksi, $usr);
    while ($us = mysqli_fetch_object($cekusr)) {
      $usrname = $us->username;
    }
    if ($username2 != $usrname) {
      $query2 = "UPDATE login SET username='$username2',password='$newPass2',posisi='$id_akses2',pertanyaan='$pertanyaan',jawaban='$jawaban' where id_login = '$idlogin2' ";
      $input2 = mysqli_query($koneksi, $query2);
    }else {
      $query2 = "UPDATE login SET password='$newPass2',posisi='$id_akses2' where id_login = '$idlogin2' ";
      $input2 = mysqli_query($koneksi, $query2);
    }
    $query2 = "UPDATE login SET username='$username2',password='$newPass2',posisi='$id_akses2',pertanyaan='$pertanyaan',jawaban='$jawaban' where id_login = '$idlogin2' ";
    $input2 = mysqli_query($koneksi, $query2);
    if($input2){
      ?>
      <script type="text/javascript">
      swal({
        title: "Data dirubah",
        text: "Data akun <?php echo $username2?> berhasil diubah",
        type: "success",
        confirmButtonText: "Oke",
      },
      function () {
        $("#dataakun").load("./backend/refreshdataakun.php");
        $('#ubah_pasien').hide(350);
      });
      </script>
      <?php
    }else {
      ?>
      <script type="text/javascript">
      swal({
        title: "Maaf",
        text: "Data akun <?php echo $username2?> gagal diubah",
        type: "error",
        confirmWarningText: "Oke"
      },
      function () {
        window.location='?p=pengaturanakun#';
      });
    </script>
    <?php
    }
  }
  
}

?>
