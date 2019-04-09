<!-- created by: Roy Andri Selasa, 03-07-2018 -->
<?php
include_once '../config/dbconfig.php';

if(isset($_POST['ubah_pasien2'])){
  $nomorrm2 = $_POST['rm3'];
  $nama2 = $_POST['namapasien2'];
  $kelamin2 = $_POST['jeniskelamin2'];
  $namakk2 = $_POST['kk2'];
  $pekerjaan2 = $_POST['pekerjaan2'];
  $alamat2 = $_POST['alamat2'];
  $kel2 = $_POST['kel2'];
  $kec2 = $_POST['kec2'];
  $kab2 = $_POST['kab2'];
  $tempatlahir2 = $_POST['tempatlahir2'];
  $tanggallahir2 = $_POST['tanggallahir2'];
  $agama2 = $_POST['agama2'];

  $query = "UPDATE pasien SET nama_pasien='$nama2',jenis_kelamin='$kelamin2',nama_kk='$namakk2',pekerjaan='$pekerjaan2',alamat='$alamat2',kelurahan='$kel2',kecamatan='$kec2',kabupaten='$kab2',tempat_lahir='$tempatlahir2',tanggal_lahir='$tanggallahir2',agama='$agama2' where no_rm = '$nomorrm2' ";
  $input = mysqli_query($koneksi, $query);
  if($input){
    ?>
    <?php echo $agama2; ?>
     <script type="text/javascript">
      swal({
        title: "Data dirubah",
        text: "Data pasien <?php echo $nomorrm2?> berhasil diubah",
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
        title: "Maaf",
        text: "Data pasien <?php echo $nomorrm2?> gagal diubah",
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
