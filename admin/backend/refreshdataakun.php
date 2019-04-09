<!-- created by: Roy Andri Selasa, 05-07-2018 -->
<?php

$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$query = 'SELECT id_login, username, password, nama_hak_akses, pertanyaan, jawaban FROM login inner join hak_akses on hak_akses.id_hak_akses = login.posisi ORDER BY id_login DESC';
$akun = mysqli_query($koneksi, $query);

$no=0;
while ($a = mysqli_fetch_object($akun)) {
$no= $no+1;
?>
<tr>
  <td><?php echo $no; ?></td>
  <td hidden><?php echo $a->id_login; ?></td>
  <td><?php echo $a->username; ?></td>
  <td><?php echo $isi = substr($a->pertanyaan, 0, 40 ); echo " ....";  ?></td>
  <td><?php echo $a->jawaban; ?></td>
  <td><?php echo $a->nama_hak_akses;  ?></td>
  <td>
    <div class="btn-group-horizontal btn-group-sm">
      <input type="hidden" name="idlogin" value="<?php echo $a->id_login;?>">
      <a href="javascript:void(0)" class="btn btn-warning btn-sm" onclick="ubahakun(<?php echo "'$a->id_login'"; ?>)"><i class="fa fa-edit"></i> Ubah</a>
      <a href="javascript:void(0)" class="btn btn-danger btn-sm " id="hapus_akun" data-id="<?php echo $a->id_login; ?>"><i class="fa fa-trash"></i> Hapus</a>
    </div>

  </td>
</tr>
<?php } ?>
