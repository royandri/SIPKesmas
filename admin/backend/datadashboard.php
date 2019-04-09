<!-- created by: Roy Andri Selasa, 17-07-2018 -->
<?php
include_once '../config/dbconfig.php';

$query  = "SELECT COUNT(id_berobat) AS jumlah_antrian FROM pasien_berobat where tanggal_berobat=CURRENT_DATE()";
$query2 = "SELECT COUNT(id_berobat) AS antrian_blmselesai FROM pasien_berobat where tanggal_berobat=CURRENT_DATE() AND status='Belum Selesai'";
$query3 = "SELECT COUNT(id_berobat) AS antrian_selesai FROM pasien_berobat where tanggal_berobat=CURRENT_DATE() AND status='Selesai';";
$query4 = "SELECT COUNT(no_rm) AS jumlah_pasien from pasien";

$input  = mysqli_query($koneksi, $query);
$input2 = mysqli_query($koneksi, $query2);
$input3 = mysqli_query($koneksi, $query3);
$input4 = mysqli_query($koneksi, $query4);

$jumantrian = mysqli_fetch_object($input);
$blmselesai = mysqli_fetch_object($input2);
$sdhselesai = mysqli_fetch_object($input3);
$jumlahpasien = mysqli_fetch_object($input4);
 ?>
