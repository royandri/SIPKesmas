<!-- created by: Roy Andri Selasa, 17-07-2018 -->
<?php
include_once '../config/dbconfig.php';
if (isset($_POST['selanjutnya'])){
  $noantrian = $_POST['nilai']+1;
  $status = $noantrian+1;
  $antrian = "SELECT id_berobat, no_antrian FROM pasien_berobat WHERE tanggal_berobat = CURRENT_DATE() AND no_antrian=$noantrian";
  $hasil = mysqli_query($koneksi,$antrian);
  $id = mysqli_fetch_object($hasil);
  if(mysqli_num_rows($hasil) > 0){
    $cek = "SELECT id_berobat, no_antrian FROM pasien_berobat WHERE tanggal_berobat = CURRENT_DATE() AND no_antrian=$status";
    $ubahantri = "UPDATE pasien_berobat SET status = 'Selesai' WHERE id_berobat = $id->id_berobat";
    $ubahstatus = "UPDATE status_antrian SET no_antrian = $noantrian";
    $ubah1 = mysqli_query($koneksi, $ubahantri);
    $ubah2 = mysqli_query($koneksi, $ubahstatus);
    $cek2 = mysqli_query($koneksi, $cek);
    if(mysqli_num_rows($cek2) > 0){
    }else{
      ?>
      <script type="text/javascript">
       swal({
         title: "Informasi",
         text: "No antrian <?php echo $noantrian; ?> adalah antrian terakhir",
         type: "success",
         confirmButtonText: "Oke",
       },
       function () {
         $("#selanjut").prop( "disabled", true );
         $("#keterangan").load(".backend/ket.php");
       });
      </script>
      <?php
    }
  }else{
    ?>
    <script type="text/javascript">
     swal({
       title: "Informasi",
       text: "No antrian tidak ditemukan atau sudah terpanggil",
       type: "success",
       confirmButtonText: "Oke",
     },
     function () {
       $("#selanjut").prop( "disabled", true );
     });
    </script>
    <?php
  }
}
?>
