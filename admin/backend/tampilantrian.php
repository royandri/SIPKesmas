<?php
include_once '../config/dbconfig.php';

$query = 'SELECT id_berobat, no_rm, tanggal_berobat, nama_pasien, tujuan, no_antrian, status FROM pasien_berobat where status != \'Gagal\' ORDER BY id_berobat DESC';
$pasien = mysqli_query($koneksi, $query);

 ?>
