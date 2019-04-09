<!-- created by: Roy Andri Sabtu, 07-07-2018 -->
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$query = "UPDATE status_antrian SET status_antrian='Berhenti' where loket_antrian = 'BP Umum' ";
$input = mysqli_query($koneksi, $query);
?>
