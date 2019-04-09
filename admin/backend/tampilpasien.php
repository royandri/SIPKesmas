<?php
include_once '../config/dbconfig.php';

$query = 'SELECT no_rm, tanggal_daftar, nama_pasien, jenis_kelamin, nama_kk, pekerjaan FROM pasien where no_rm != \'0\' ORDER BY no_rm DESC';
$pasien = mysqli_query($koneksi, $query);

 ?>
