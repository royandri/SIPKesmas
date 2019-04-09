<?php
include_once './config/dbconfig.php';

$rm = $_POST['rm'];

if(isset($_POST['cek_status_antrian'])){
  $query = "SELECT no_antrian FROM pasien_berobat WHERE no_rm = '".$rm."' AND status = 'Belum Selesai' AND tanggal_berobat = CURDATE() ORDER by id_berobat DESC LIMIT 1  ";
  $input = mysqli_query($koneksi, $query);

  while ($antrian = mysqli_fetch_array($input)) {
    $no_antrian = $antrian['no_antrian'];
  }

  if(mysqli_num_rows($input) > 0){
    ?>
     <script type="text/javascript">
      swal({
        title: "Pencarian Berhasil",
        text: "Antrian  <?php echo $rm?> berhasil ditemukan",
        type: "success",
        confirmButtonText: "Oke",
      },
      function(){
        $('#cek').show(500);
        $('#cekantrian').hide();
      });
    </script>
     <?php
  }else {
    ?>
     <script type="text/javascript">
      swal({
        title: "",
        text: "Data antrian tidak ditemukan ditemukan!",
        type: "error",
        confirmWarningText: "Oke"
      },
      function () {
        window.location='menu.php?f=cekantrian#';
      });
    </script>
    <?php
  }
}

?>
