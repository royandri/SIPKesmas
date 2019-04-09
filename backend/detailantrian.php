<!-- created by: Roy Andri Jumat, 22-06-2018 -->
<?php
include_once './config/dbconfig.php';

$ambilid = mysqli_query($koneksi, "SELECT id_berobat FROM pasien_berobat ORDER by id_berobat DESC LIMIT 1");
while ($idp = mysqli_fetch_array($ambilid)) {
  $idps = $idp['id_berobat'];
}

$ambildata = mysqli_query($koneksi, "select id_berobat, pasien_berobat.no_rm as norm, pasien.nama_pasien as namapasien, alamat, kelurahan, kecamatan, kabupaten, no_antrian from pasien_berobat inner join pasien on pasien_berobat.no_rm = pasien.no_rm WHERE id_berobat='".$idps."'");
while ($hasil = mysqli_fetch_array($ambildata)) {
  $id = $hasil['id_berobat'];
  $nomor_rm = $hasil['norm'];
  $nama_pasien = $hasil['namapasien'];
  $alamat = $hasil['alamat'];
  $kelurahan = $hasil['kelurahan'];
  $kecamatan = $hasil['kecamatan'];
  $kabupaten = $hasil['kabupaten'];
  $noantrian = $hasil['no_antrian'];
}
?>
