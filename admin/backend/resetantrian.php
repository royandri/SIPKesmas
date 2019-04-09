<!-- created by: Roy Andri Sabtu, 07-07-2018 -->
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$query = "UPDATE status_antrian SET no_antrian=0, status_antrian='Berhenti', tanggal_mulai=CURRENT_DATE()  where loket_antrian = 'BP Umum' ";
$query2 = "INSERT INTO pasien_berobat (no_rm,no_antrian,status) values ('0',0,'Gagal') ";
$resetstatus = mysqli_query($koneksi, $query);
$resetantrian = mysqli_query($koneksi, $query2);

?>
