<?php
include_once '../config/dbconfig.php';
$id = "SELECT max(id_berobat) as id FROM pasien_berobat";

$carikode2 = mysqli_query($koneksi,$id);
$tm_cari2 = mysqli_fetch_array($carikode2);
$id_berobat = $tm_cari2['id']+=1;
echo '
<input type="teks" name="id_berobat"  value="'.$id_berobat.'" required="true">'.$id_berobat;
?>
