<?php
include_once '../../config/dbconfig.php';
$kode = "SELECT max(no_rm) as kode FROM pasien";

$carikode = mysqli_query($koneksi,$kode);
$tm_cari = mysqli_fetch_array($carikode);
$kd=substr($tm_cari['kode'],2,7);
$tambah=$kd+1;
if($tambah<10){
  $norm="RM00000".$tambah;
}else{
  $norm="RM0000".$tambah;
}
echo '
<norm id="nomorrm">'.$norm.'</norm>
<input type="teks" name="rm" value="'.$norm.'" class="form-control" placeholder="No. RM" required="true">';
?>
