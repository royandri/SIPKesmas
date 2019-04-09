<!-- created by: Roy Andri Jumat, 22-06-2018 -->
<?php
include_once '../config/dbconfig.php';


if(isset($_POST['tambah_pasien'])){
  $nomorrm = $_POST['rm'];
  $tgl_now = $_POST['tanggal'];
  $nama = $_POST['namapasien'];
  $kelamin = $_POST['kelamin'];
  $namakk = $_POST['kk'];
  $pekerjaan = $_POST['pekerjaan'];
  $alamat = $_POST['alamat'];
  $kel = $_POST['kel'];
  $kec = $_POST['kec'];
  $kab = $_POST['kab'];
  $tempatlahir = $_POST['tempatlahir'];
  $tanggallahir = $_POST['tanggallahir'];
  $agama = $_POST['agmz'];

  $query = "INSERT INTO pasien VALUES ('".$nomorrm."','".$tgl_now."','".$nama."','".$kelamin."','".$namakk."','".$pekerjaan."','".$alamat."','".$kel."','".$kec."','".$kab."','".$tempatlahir."','".$tanggallahir."','".$agama."')";
  $input = mysqli_query($koneksi, $query);

  if($input){
    ?>
     <script type="text/javascript">
      swal({
        title: "Pendaftaran Berhasil",
        text: "Data pasien berhasil disimpan",
        type: "success",
        confirmButtonText: "Oke",
      },
      function () {
        $("#datapasien").load("./backend/refreshdatapasien.php");
        $('#tambah_pasien').hide(350);
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
        window.location='?p=datapasien#';
      });
    </script>
    <?php
  }
}
?>
