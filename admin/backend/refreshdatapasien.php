<!-- created by: Roy Andri Selasa, 03-07-2018 -->
<?php

$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
$query = 'SELECT no_rm, tanggal_daftar, nama_pasien, jenis_kelamin, nama_kk, pekerjaan FROM pasien where no_rm != \'0\' ORDER BY no_rm DESC';
$pasien = mysqli_query($koneksi, $query);

$no=0;
while ($a = mysqli_fetch_object($pasien)) {
$no= $no+1;
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $a->no_rm; ?></td>
<td><?php echo $a->nama_pasien; ?></td>
<td><?php echo $a->jenis_kelamin; ?></td>
<td><?php echo $a->nama_kk; ?></td>
<td><?php echo $a->pekerjaan; ?></td>
<td>
  <div class="btn-group-horizontal btn-group-sm">
    <input type="hidden" name="norm" value="<?php echo $a->no_rm;?>">
    <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="detailpasien(<?php echo "'$a->no_rm'"; ?>)"><i class="fa fa-eye"></i> Detail</a>
    <a href="javascript:void(0)" class="btn btn-warning btn-sm" onclick="ubahpasien(<?php echo "'$a->no_rm'"; ?>)"><i class="fa fa-edit"></i> Ubah</a>
    <a href="javascript:void(0)" class="btn btn-danger btn-sm " id="hapus_pasien" data-id="<?php echo $a->no_rm; ?>"><i class="fa fa-trash"></i> Hapus</a>
  </div>
</td>
</tr>
<?php } ?>
