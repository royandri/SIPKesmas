<!-- created by: Roy Andri Selasa, 03-07-2018 -->
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$norm = $_GET['no_rm'];
$query = "SELECT * FROM pasien where no_rm='$norm'";
$data = mysqli_query($koneksi,$query);
$pasien =mysqli_fetch_object($data);
 ?>

<div id="no_rm"><?php echo $norm ?></div>
<div id="tanggal"><?php echo $pasien->tanggal_daftar ?></div>
<div id="namapasien"><?php echo $pasien->nama_pasien ?></div>
<div id="jeniskelamin"><?php echo $pasien->jenis_kelamin ?></div>
<div id="kk"><?php echo $pasien->nama_kk ?></div>
<div id="pekerjaan"><?php echo $pasien->pekerjaan ?></div>
<div id="alamat"><?php echo $pasien->alamat ?></div>
<div id="kel"><?php echo $pasien->kelurahan ?></div>
<div id="kec"><?php echo $pasien->kecamatan ?></div>
<div id="kab"><?php echo $pasien->kabupaten ?></div>
<div id="tempatlahir"><?php echo $pasien->tempat_lahir ?></div>
<div id="tanggallahir"><?php echo $pasien->tanggal_lahir ?></div>
<div id="agama"><?php echo $pasien->agama ?></div>
