<!-- created by: Roy Andri Selasa, 15-07-2018 -->
<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$idlogin = $_GET['id_login'];
$query = "SELECT * FROM login where id_login='$idlogin'";
$data = mysqli_query($koneksi,$query);
$login =mysqli_fetch_object($data);
 ?>

<div id="id_login"><?php echo $idlogin ?></div>
<div id="username"><?php echo $login->username ?></div>
<div id="password"><?php echo $login->password ?></div>
<div id="pertanyaan"><?php echo $login->pertanyaan ?></div>
<div id="jawaban"><?php echo $login->jawaban ?></div>
<div id="hak_akses"><?php echo $login->posisi ?></div>
