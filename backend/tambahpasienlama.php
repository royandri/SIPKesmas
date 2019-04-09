<!-- created by: Roy Andri Jumat, 22-06-2018 -->
<?php
include_once './config/dbconfig.php';



if(isset($_POST['daftar_pasien_lama'])){
  $nomorrm = $_POST['no_rm'];
  $tgl_now = $_POST['tgl'];
  $nama = $_POST['nama'];
  $kelamin= $_POST['kelamin'];
  $tempat = $_POST['tempat'];
  $tanggallahir= $_POST['tanggallahir'];
  $jenis = $_POST['jenispasien'];
  $jaminan = $_POST['jaminan'];
  $tujuan = $_POST['tujuanpasien'];
  $antrian = $_POST['antrian'];

  $query = "INSERT INTO pasien_berobat (no_rm, tanggal_berobat, nama_pasien, jenis_kelamin, tempat_lahir, tanggal_lahir, jenis_pasien, no_jaminan, tujuan, no_antrian) VALUES ('".$nomorrm."','".$tgl_now."','".$nama."','".$kelamin."','".$tempat."','".$tanggallahir."','".$jenis."','".$jaminan."','".$tujuan."','".$antrian."')";
  $input = mysqli_query($koneksi, $query);
  if($input){
    ?>
     <script type="text/javascript">
      swal({
        title: "Pendaftaran Berhasil",
        text: "No Pendaftaran <?php echo $antrian?> berhasil disimpan",
        type: "success",
        confirmButtonText: "Oke",
      },
      function(){
        window.location="menu.php?f=detailpasienlama#";
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
        window.location='menu.php?f=pasienlama#';
      });
    </script>
    <?php
  }
}
?>
