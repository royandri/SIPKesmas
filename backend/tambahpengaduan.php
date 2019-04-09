<?php
include_once './config/dbconfig.php';


if(isset($_POST['tambah_pengaduan'])){
  $nama = $_POST['nama_pengirim'];
  $email = $_POST['email_pengirim'];
  $pengaduan = $_POST['pesan_pengirim'];

  $query = "INSERT INTO kritik_saran (nama,email,isi_aduan) VALUES ('".$nama."','".$email."','".$pengaduan."')";
  $input = mysqli_query($koneksi, $query);

  if($input){
    ?>
    <script type="text/javascript">
      swal({
        title: "Terima Kasih",
        text: "Pengaduan atas nama <?php echo $nama?> berhasil disimpan",
        type: "success",
        confirmButtonText: "Oke",
      },
      function(){
        window.location="menu.php?f=pengaduan#";
      });
    </script>
    <?php
  }else {
    ?>
    <script type="text/javascript">
      swal({
        title: "",
        text: "Pengaduan gagal disimpan!",
        type: "error",
        confirmWarningText: "Oke"
      },
      function () {
        window.location='menu.php?f=pengaduan#';
      });
    </script>
    <?php
  }
}
?>
