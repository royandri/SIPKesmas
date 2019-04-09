<?php
include_once 'config/dbconfig.php';
include_once 'panggilantrian.php';

$ljt = $display+1;
$qury = "SELECT id_berobat, no_antrian FROM pasien_berobat WHERE tanggal_berobat = CURRENT_DATE() AND no_antrian=$ljt";
$lanjut = mysqli_query($koneksi, $qury);
 ?>
