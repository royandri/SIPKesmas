<?php
include_once '../config/dbconfig.php';

$query = 'SELECT id_pengaduan, nama, email, isi_aduan FROM kritik_saran ORDER BY id_pengaduan DESC';
$pengaduan = mysqli_query($koneksi, $query);

 ?>
