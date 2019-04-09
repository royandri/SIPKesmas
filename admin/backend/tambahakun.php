<!-- created by: Roy Andri Jumat, 22-06-2018 -->
<?php
include_once '../config/dbconfig.php';


if(isset($_POST['tambah_akun'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $hak_akses = $_POST['hakakses'];
  $pertanyaan2 = $_POST['pertanyaan2'];
  $jawaban2 = $_POST['jawaban2'];
  $newPass = md5($password);

  $cekusername = "SELECT username from login where username = '$username'";
  $prosescek = mysqli_query($koneksi, $cekusername);
  if(mysqli_num_rows($prosescek) > 0){
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
    $hakakses = "SELECT id_hak_akses from hak_akses WHERE nama_hak_akses = '$hak_akses'";
    $id_hak = mysqli_query($koneksi, $hakakses);
    while ($id = mysqli_fetch_object($id_hak)) {
      $id_akses = $id->id_hak_akses;
    }

    $query = "INSERT INTO login (username,password,posisi,pertanyaan,jawaban) VALUES ('".$username."','".$newPass."','".$id_akses."','".$pertanyaan2."','".$jawaban2."')";
    $input = mysqli_query($koneksi, $query);

    if($input){
      ?>
       <script type="text/javascript">
        swal({
          title: "Berhasil",
          text: "Akun berhasil ditambahkan",
          type: "success",
          confirmButtonText: "Oke",
        },
        function () {
          $("#dataakun").load("./backend/refreshdataakun.php");
          $('#tambah_akun').hide(500);
        });
        // function(){
        //   window.location="?p=datapasien#";
        // });
      </script>
       <?php
    }else {
      ?>
       <script type="text/javascript">
        swal({
          title: "",
          text: "Pendaftaran Gagal",
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
