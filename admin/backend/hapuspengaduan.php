<!-- created by: Roy Andri Selasa, 05-07-2018 -->
<?php
include_once '../../config/dbconfig.php';

$id_pengaduan = $_GET['id_pengaduan'];
$query = "DELETE FROM kritik_saran WHERE id_pengaduan='$id_pengaduan'";
$input = mysqli_query($koneksi, $query);
 ?>
