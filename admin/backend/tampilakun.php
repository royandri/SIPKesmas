<?php
include_once '../config/dbconfig.php';

$query = 'SELECT id_login, username, pertanyaan,jawaban, nama_hak_akses FROM login inner join hak_akses on hak_akses.id_hak_akses = login.posisi ORDER BY id_login DESC';
$akun = mysqli_query($koneksi, $query);

 ?>
