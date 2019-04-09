<!-- created by: Roy Andri Selasa, 03-07-2018 -->
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$idpengaduan = $_GET['id_pengaduan'];
$query = "SELECT * FROM kritik_saran where id_pengaduan='$idpengaduan'";
$data = mysqli_query($koneksi,$query);
$pengaduan =mysqli_fetch_object($data);
 ?>

<div id="id_pengaduan"><?php echo $idpengaduan ?></div>
<div id="nama"><?php echo $pengaduan->nama ?></div>
<div id="email"><?php echo $pengaduan->email ?></div>
<div id="isi_aduan"><?php echo $pengaduan->isi_aduan ?></div>
