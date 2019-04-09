<!-- created by: Roy Andri Minggu, 24-06-2018 -->
<?php
include_once '../config/dbconfig.php';
$norm = $_GET['norm'];

$ambilantrian = mysqli_query($koneksi, "SELECT no_rm, jenis_kelamin, nama_kk, year(curdate())-year(tanggal_lahir)as umur, pekerjaan, alamat, kelurahan, kecamatan, kabupaten  FROM pasien WHERE no_rm='".$norm."'");
while ($anggota = mysqli_fetch_array($ambilantrian)) {
  $nomorrekmed = $anggota['no_rm'];
  $kelamin = $anggota['jenis_kelamin'];
  $nama_kk = $anggota['nama_kk'];
  $umur = $anggota['umur'];
  $pekerjaan = $anggota['pekerjaan'];
  $alamat = $anggota['alamat'];
  $kelurahan = $anggota['kelurahan'];
  $kecamatan = $anggota['kecamatan'];
  $kabupaten = $anggota['kabupaten'];
}
?>
