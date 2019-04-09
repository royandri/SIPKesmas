<!-- created by: Roy Andri Kamin, 05-07-2018 -->
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$idberobat = $_GET['id_berobat'];
$query = "SELECT * FROM pasien_berobat where id_berobat='$idberobat'";
$data = mysqli_query($koneksi,$query);
$berobat =mysqli_fetch_object($data);
 ?>

<div id="id_berobat"><?php echo $idberobat ?></div>
<div id="no_rm"><?php echo $berobat->no_rm ?></div>
<div id="tanggal_berobat"><?php echo $berobat->tanggal_berobat ?></div>
<div id="nama_pasien"><?php echo $berobat->nama_pasien ?></div>
<div id="jenis_kelamin"><?php echo $berobat->jenis_kelamin ?></div>
<div id="tempat_lahir"><?php echo $berobat->tempat_lahir ?></div>
<div id="tanggal_lahir"><?php echo $berobat->tanggal_lahir ?></div>
<div id="jenis_pasien"><?php echo $berobat->jenis_pasien ?></div>
<div id="no_jaminan"><?php echo $berobat->no_jaminan ?></div>
<div id="tujuan"><?php echo $berobat->tujuan ?></div>
<div id="no_antrian"><?php echo $berobat->no_antrian ?></div>
<div id="status"><?php echo $berobat->status ?></div>
