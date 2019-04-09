<!-- created by: Roy Andri Selasa, 17-07-2018 -->
<?php
include_once '../config/dbconfig.php';

$query = "SELECT no_antrian FROM status_antrian";
$input = mysqli_query($koneksi, $query);
$antrian = mysqli_fetch_object($input);
 ?>
