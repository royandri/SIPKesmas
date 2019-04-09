<?php
include_once '../config/dbconfig.php';

$kode = "SELECT no_antrian as antrian FROM pasien_berobat ORDER BY id_berobat DESC LIMIT 1";
$hasil = mysqli_query($koneksi,$kode);
if (!$hasil) {
    $noantri = 0;
}else{
  $data = mysqli_fetch_array($hasil);
  $noantri= $data['antrian']+1;
}
echo '<input type="teks" name="antrian"  value="'.$noantri.'"required="true">';
 ?>
