<?php
include_once './config/dbconfig.php';


if(isset($_POST['cek_pendaftaran'])){
  $rm = $_POST['rm'];
  $tgl_lahir = $_POST['tgl_lahir'];

  $query = "SELECT no_rm FROM pasien WHERE no_rm = '".$rm."' AND tanggal_lahir = '".$tgl_lahir."'";
  $input = mysqli_query($koneksi, $query);
  $query2 = "SELECT id_berobat from pasien_berobat where no_rm='".$rm."' AND status ='Belum Selesai' AND tanggal_berobat = CURRENT_DATE()";
  $input2 = mysqli_query($koneksi, $query2);


  if(mysqli_num_rows($input)>0 && mysqli_num_rows($input2) < 1){
    $pasien = "SELECT *FROM pasien WHERE no_rm ='$rm'";
    $data = mysqli_query($koneksi, $pasien);
    $dtpasien = mysqli_fetch_object($data);
    ?>
     <script type="text/javascript">
      swal({
        title: "Pencarian Berhasil",
        text: "No. RM  <?php echo $rm?> berhasil ditemukan !",
        type: "success",
        confirmButtonText: "Oke",
      },
      function(){
        $('#formreg').show(500);
        $('#cek').hide();
      });
    </script>
     <?php
  }else if (mysqli_num_rows($input2) > 0){
    ?>
     <script type="text/javascript">
      swal({
        title: "",
        text: "No. RM <?php echo $rm?> masih memiliki antrian pada hari ini !",
        type: "error",
        confirmWarningText: "Oke"
      },
      function () {
        window.location='menu.php?f=pasienlama#';
      });
    </script>
    <?php
  }else{
    ?>
     <script type="text/javascript">
      swal({
        title: "",
        text: "No. RM <?php echo $rm?> tidak ditemukan !",
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
