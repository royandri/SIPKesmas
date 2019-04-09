<!-- created by: Roy Andri Jumat, 27-07-2018 -->
<?php
 include_once '../config/dbconfig.php';
if (isset($_POST['lanjut3'])) {
  $uname3 = $_POST['uname3'];
  $uname2 = $uname3;
  $katasandibaru = $_POST['katasandibaru'];
  $enkrippass = md5($katasandibaru);
  $queryubah = "UPDATE login SET password='$enkrippass' WHERE username='$uname3'";
  $exeubah = mysqli_query($koneksi, $queryubah);
  if($exeubah){
    ?>
    <script type="text/javascript">
    swal({
      title: "Sukses",
      text: "Kata sandi berhasil diubah !",
      type: "success",
      confirmButtonText: "Oke",
    },
    function () {
      $('#datapasswordbaru').hide();
      $('#datapertanyaan').hide();
      $('#datauname').hide();
      $('#datalogin').show(500);
      $('#warn').hide();
      $('warn2').hide();
    });
    </script>
    <?php
  }else{
  ?>
  <script type="text/javascript">
  swal({
    title: "",
    text: "Kata sandi gagal diubah !",
    type: "danger",
    confirmButtonText: "Oke",
  },
  function () {
    $('#datapasswordbaru').hide();
    $('#datapertanyaan').hide();
    $('#datauname').hide();
    $('#datalogin').show(500);
    $('#warn').hide();
    $('warn2').hide();
  });
  </script>
  <?php
}
}

 ?>
