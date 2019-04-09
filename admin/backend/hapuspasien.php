<!-- created by: Roy Andri Selasa, 03-07-2018 -->
<?php
include_once '../../config/dbconfig.php';

$no_rm = $_GET['no_rm'];
$query = "DELETE FROM pasien WHERE no_rm='$no_rm'";
$input = mysqli_query($koneksi, $query);
 ?>
