<!-- created by: Roy Andri Jumat, 27-07-2018 -->
<?php
 include_once '../config/dbconfig.php';
 $pert="";
if (isset($_POST['lanjut1'])) {
  $uname = $_POST['uname1'];
  $cekuname = "SELECT username, pertanyaan FROM login WHERE  username='$uname'";
  $proses = mysqli_query($koneksi, $cekuname);
  $per = mysqli_fetch_object($proses);
  $pert = $per->pertanyaan;
  if (mysqli_num_rows($proses) > 0) {
    ?>
    <script>
    $(document).ready(function(){
      $('#datapertanyaan').show(500);
      $('#datauname').hide();
      $('#datalogin').hide();
    })
    </script>
    <?php
  }else{
    ?>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#warn').show(500);
      $('#datauname').show(500);
      $('#datalogin').hide();
    })
   </script>

    <?php
  }
}
 ?>
