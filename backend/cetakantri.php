<!-- created by: Roy Andri Minggu, 24-06-2018 -->
<?php
include_once '../config/dbconfig.php';
$id = $_GET['idberobat'];

$ambilantrian = mysqli_query($koneksi, "SELECT no_rm, no_antrian, tujuan FROM pasien_berobat WHERE id_berobat='".$id."'");
while ($antrian = mysqli_fetch_array($ambilantrian)) {
  $norekmed = $antrian['no_rm'];
  $no_antrian = $antrian['no_antrian'];
  $tujuan = $antrian['tujuan'];
}
?>
