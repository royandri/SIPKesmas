<!-- created by: Roy Andri Jumat, 03-08-2018 -->
<?php
include_once '../../config/dbconfig.php';
$qry2 = "SELECT no_antrian from status_antrian";
$ambil = mysqli_query($koneksi, $qry2);
$a = mysqli_fetch_object($ambil);
$nxt = $a->no_antrian+1;
$qry = "SELECT id_berobat, no_antrian FROM pasien_berobat WHERE tanggal_berobat = CURRENT_DATE() AND no_antrian=$nxt";
$ambildata = mysqli_query($koneksi, $qry);
if(mysqli_num_rows($ambildata) > 0){
  ?>
  <button type="submit" id="ulang"  class="btn btn-primary" name="ulg"><i class="fa fa-angle-double-up"></i> Ulang</button>
  <button type="submit" id="sebelum"  class="btn btn-success" value="Sebelumnya" name="sebelumnya"><i class="fa fa-angle-double-down"></i> Sebelumnya</button>
  <button type="submit" id="selanjut" class="btn btn-warning" value="Selanjutnya" name="selanjutnya"><i class="fa  fa-angle-double-right"></i> Selanjutnya</button>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#keterangan").load("backend/ket2.php");
  })
  </script>
<?php
}else {
  ?>
  <button type="submit" id="ulang"  class="btn btn-primary" name="ulg"><i class="fa fa-angle-double-up"></i> Ulang</button>
  <button type="submit" id="sebelum"  class="btn btn-success" value="Sebelumnya" name="sebelumnya"><i class="fa fa-angle-double-down"></i> Sebelumnya</button>
  <button type="submit" id="selanjut" disabled class="btn btn-warning" value="Selanjutnya" name="selanjutnya"><i class="fa  fa-angle-double-right"></i> Selanjutnya</button>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#keterangan").load("backend/ket.php");
  })
  </script>
  <?php
}
 ?>
