<?php
include_once '../config/dbconfig.php';
if(isset($_POST['ulg'])){
  $no_antrian = $_POST['nilai'];
  $status = $no_antrian+1;
  $cekulang = "SELECT id_berobat, no_antrian FROM pasien_berobat WHERE tanggal_berobat = CURRENT_DATE() AND no_antrian=$status";
  $cekulang2 = mysqli_query($koneksi, $cekulang);
  if(mysqli_num_rows($cekulang2) > 0){
    ?>
    <script>
    $(document).ready(function(){
      $("#ulang").prop( "disabled", false );
      $("#sebelum").prop( "disabled", false );
      $("#selanjut").prop( "disabled", false );
    });
    </script>
    <?php
  }else{
    ?>
    <script>
    $(document).ready(function(){
      $("#ulang").prop( "disabled", false );
      $("#sebelum").prop( "disabled", false );
      $("#selanjut").prop( "disabled", true );
    });
    </script>

    <?php
  }

}
 ?>
