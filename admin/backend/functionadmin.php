<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_sipkesmas');
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}

class admin{
  public $kon;
  function __construct  ($koneksi){
    $this->$kon = $koneksi;
  }

  function select_pasien($no_rm){
    $pasien=$this->kon->query("SELECT *FROM pasien WHERE no_rm = '$no_rm'");
    $fetch = $pasien->fetch_assoc();
		return $fetch;
  }
  function hapus_pasien($no_rm){
    $rm = $this->select_pasien($no_rm);
    $this->kon->query("DELETE FROM pasien WHERE no_rm='$no_rm'") ;
		// $input = $this->kon->query("DELETE FROM pasien WHERE no_rm='$no_rm'") ;
    // if($input){
    //   return 1;
    // }
    // else{
    //   return 0;
    // }
  }
}
$admin = new admin($koneksi);
 ?>
