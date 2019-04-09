<!-- created by: Roy Andri Sabtu, 07-07-2018 -->
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$query = "SELECT status_antrian, tanggal_mulai FROM status_antrian where loket_antrian='BP Umum'";
$antrian = mysqli_query($koneksi, $query);
$a = mysqli_fetch_object($antrian);
date_default_timezone_set("Asia/Jakarta");
$tanggal_sekarang = date("Y-m-d");
  if ($a->status_antrian == "Berjalan") {?>
    <?php
    if ($a->tanggal_mulai == $tanggal_sekarang ) {
      ?>
      <button type="button" disabled  class="btn btn-success" name="mulai" id="mulai">Mulai Antrian</button>
      <button type="button"  class="btn btn-warning" name="tutup" id="tutup">Tutup Antrian</button>
      <button type="button" disabled class="btn btn-danger" name="reset" id="reset">Reset Antrian</button>
      <?php
    }else if ($a->tanggal_mulai != $tanggal_sekarang ){
      ?>
      <button type="button" disabled  class="btn btn-success" name="mulai" id="mulai">Mulai Antrian</button>
      <button type="button"  class="btn btn-warning" name="tutup" id="tutup">Tutup Antrian</button>
      <button type="button"  class="btn btn-danger" name="reset" id="reset">Reset Antrian</button>
      <?php
    }
     ?>
    <!-- <script>
    $(document).ready(function(){
      $("#ulang").prop( "disabled", false );
      $("#sebelum").prop( "disabled", false );
      $("#selanjut").prop( "disabled", false );
      $("#keterangan").load("backend/ket2.php");
    });
    </script> -->

    <?php
  }else if ($a->status_antrian =="Berhenti"){?>
    <!-- <script>
    $(document).ready(function(){
      $("#ulang").prop( "disabled", true );
      $("#sebelum").prop( "disabled", true );
      $("#selanjut").prop( "disabled", true );
      $("#keterangan").load("backend/ket.php");
    });
    </script> -->

    <?php
    if ($a->tanggal_mulai == $tanggal_sekarang ) {
      ?>
      <button type="button"  class="btn btn-success" name="mulai" id="mulai">Mulai Antrian</button>
      <button type="button" disabled class="btn btn-warning" name="tutup" id="tutup">Stop Antrian</button>
      <button type="button" disabled class="btn btn-danger" name="reset" id="reset">Reset Antrian</button>
      <?php
    }else if ($a->tanggal_mulai != $tanggal_sekarang ){
      ?>
      <button type="button"  class="btn btn-success" name="mulai" id="mulai">Mulai Antrian</button>
      <button type="button" disabled class="btn btn-warning" name="tutup" id="tutup">Stop Antrian</button>
      <button type="button"  class="btn btn-danger" name="reset" id="reset">Reset Antrian</button>
      <?php
    }
}
 ?>
 <br><p></p>
<p>Status antrian: <b><?php echo $a->status_antrian;?> </b> <a id="refr" ><i class="fa fa-refresh"></i></a> </p>
