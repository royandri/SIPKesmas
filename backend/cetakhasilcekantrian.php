<!-- created by: Roy Andri Minggu, 24-06-2018 -->
<?php
include_once '../config/dbconfig.php';
$rm = $_GET['rm'];
$query = "SELECT no_rm, tujuan, no_antrian FROM pasien_berobat WHERE no_rm = '".$rm."' AND status = 'Belum Selesai' AND tanggal_berobat = CURDATE() ORDER by id_berobat DESC LIMIT 1  ";
$ambilantrian = mysqli_query($koneksi, $query);
while ($antrian = mysqli_fetch_array($ambilantrian)) {
  $norekmed = $antrian['no_rm'];
  $no_antrian = $antrian['no_antrian'];
  $tujuan = $antrian['tujuan'];
}
?>
