<!-- created by: Roy Andri Minggu, 15-07-2018 -->
<?php
include_once '../../config/dbconfig.php';

$id_login = $_GET['id_login'];
$query = "DELETE FROM login WHERE id_login='$id_login'";
$input = mysqli_query($koneksi, $query);
 ?>
