<!-- created by: Roy Andri Kamis, 05-07-2018 -->
<?php

$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$query = 'SELECT id_pengaduan, nama, email, isi_aduan FROM kritik_saran ORDER BY id_pengaduan DESC';
$pengaduan = mysqli_query($koneksi, $query);

$no=0;
while ($a = mysqli_fetch_object($pengaduan)) {
$no= $no+1;
?>
<tr>
  <td><?php echo $no; ?></td>
  <td hidden><?php echo $a->id_pengaduan; ?></td>
  <td><?php echo $a->nama; ?></td>
  <td><?php echo $a->email; ?></td>
  <td><?php echo $isi = substr($a->isi_aduan, 0, 60 ); echo " ....";  ?></td>
  <td>
    <div class="btn-group-horizontal btn-group-sm">
      <input type="hidden" name="norm" value="<?php echo $a->no_rm;?>">
      <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="detailpengaduan(<?php echo "'$a->id_pengaduan'"; ?>)"><i class="fa fa-eye"></i> Detail</a>
      <a href="javascript:void(0)" class="btn btn-danger btn-sm " id="hapus_pengaduan" data-id="<?php echo $a->id_pengaduan; ?>"><i class="fa fa-trash"></i> Hapus</a>
    </div>
  </td>
</tr>
<?php } ?>
