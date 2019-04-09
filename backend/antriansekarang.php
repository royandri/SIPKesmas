<!-- created by: Roy Andri Selasa, 26-06-2018 -->
<?php
include_once './config/dbconfig.php';
$query = "SELECT no_antrian FROM status_antrian WHERE loket_antrian = 'BP Umum'";
$input = mysqli_query($koneksi, $query);
while ($antrian = mysqli_fetch_array($input)) {
  $antrian_sekarang = $antrian['no_antrian'];
  echo $antrian_sekarang;
}
?>
