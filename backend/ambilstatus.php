<!-- created by: Roy Andri Jumat, 20-07-2018 -->
<?php
include_once './config/dbconfig.php';

$query = "SELECT status_antrian  FROM status_antrian where loket_antrian = 'BP Umum'";;
$input = mysqli_query($koneksi, $query);
$status_antrian = mysqli_fetch_object($input);
 ?>
