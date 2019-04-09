<!-- created by: Roy Andri Jumat, 22-06-2018 -->
<?php
include_once './config/dbconfig.php';

if(isset($_POST['daftar_pasien_baru'])){
  $idberobat = $_POST['id_berobat'];
  $nomorrm = $_POST['norekmed'];
  $tgl_now = $_POST['tanggal_se'];
  $nama = $_POST['namapasien'];
  $kelamin = $_POST['kelamin'];
  $namakk = $_POST['namakk'];
  $pekerjaan = $_POST['pekerjaan'];
  $alamat = $_POST['alamat'];
  $kel = $_POST['kel'];
  $kec = $_POST['kec'];
  $kab = $_POST['kab'];
  $tempatlahir = $_POST['tempatlahir'];
  $tanggallahir = $_POST['tanggallahir'];
  $agama = $_POST['agmz'];
  $jenis = $_POST['jenispasien'];
  $no_jaminan = $_POST['no_jaminan'];
  $tujuan = $_POST['tuju'];
  $antrian = $_POST['antrian'];
  $query = "INSERT INTO pasien VALUES ('".$nomorrm."','".$tgl_now."','".$nama."','".$kelamin."','".$namakk."','".$pekerjaan."','".$alamat."','".$kel."','".$kec."','".$kab."','".$tempatlahir."','".$tanggallahir."','".$agama."')";
  $query2 = "INSERT INTO pasien_berobat (no_rm, tanggal_berobat, nama_pasien, jenis_kelamin, tempat_lahir, tanggal_lahir, jenis_pasien, no_jaminan, tujuan, no_antrian) VALUES ('".$nomorrm."','".$tgl_now."','".$nama."','".$kelamin."','".$tempatlahir."','".$tanggallahir."','".$jenis."','".$no_jaminan."','".$tujuan."','".$antrian."')";
  $input = mysqli_query($koneksi, $query);
  $input2 = mysqli_query($koneksi, $query2);

  if($input2){
    ?>
     <script type="text/javascript">
      swal({
        title: "Pendaftaran Berhasil",
        text: "No Pendaftaran <?php echo $antrian?> berhasil disimpan",
        type: "success",
        confirmButtonText: "Oke",
      },
      function(){
        window.location="menu.php?f=detailpasienbaru#";
      });
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
        window.location='menu.php?f=detailpasienbaru#';
      });
    </script>
    <?php
  }
}
?>
