<!-- created by: Roy Andri Jumat, 27-07-2018 -->
<?php
 include_once '../config/dbconfig.php';
if (isset($_POST['lanjut2'])) {
  $uname2 = $_POST['uname2'];
  $uname = $uname2;
  $jwbn = $_POST['jawab'];
  $querytanya = "SELECT pertanyaan, jawaban FROM login WHERE username='$uname2'";
  $ambiljawaban = mysqli_query($koneksi, $querytanya);
  $hasiljawaban = mysqli_fetch_object($ambiljawaban);
  $pert = $hasiljawaban->pertanyaan;
  if($hasiljawaban->jawaban ==$jwbn){
    ?>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#datapasswordbaru').show(500);
      $('#datapertanyaan').hide();
      $('#datauname').hide();
      $('#datalogin').hide();
    })
    </script>
    <?php
  }else{
  ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#warn2').show(500);
    $('#datapertanyaan').show(500);
    $('#datauname').hide();
    $('#datalogin').hide();
  })
  function Cek() {
    if(document.getElementById('password2').value==document.getElementById('konfirmpassword').value){
     $("#cocok").show();
     $("#salah").hide();
    }else{
     $("#salah").show();
     $("#cocok").hide();
    }
  }
  </script>
  <?php
}
}

 ?>
