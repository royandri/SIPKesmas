<!-- created by: Roy Andri senin, 26-06-2018 -->
<div class="container" align="center">
  <div class="upper-section">
    <h2 align="center">Status Antrian</h2>
    <table align="center">
      <th>
        <td><hr id="hr1"></td>
        <td><hr id="hr1"></td>
      </th>
    </table>
  </div>
  <br><br>
  <div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4">
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
      <div class="panel" id="cek">
        <div class="panel-heading" style="background-color:#205E32;">
          <h3 align="center" style="color:white;">Nomor Antrian</h3>
        </div>
        <div class="panel-body">
            <?php
            include './backend/detailantrian.php';
            ?>
            <input type="hidden" name="idberobat"  value="<?php echo $id; ?>" required="true">
            <b style="font-size:70px;">  <?php echo $noantrian; ?></b><br>
            Nomor antrian sekarang <b id="antrian_sekarang"><?php include_once './backend/antriansekarang.php'; ?></b><br><br>
            <table>
              <tr>
                <td>
                  <button type="" class="form-control btn" style="background-color:#205E32; color:white;" id="refresh" name="refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </td>
                <td>&nbsp;</td>
                <td>
                  <button type="submit" class="form-control btn" style="background-color:#205E32; color:white;" name="cetakantrian" onclick="window.open('cetak/cetakantrian.php?idberobat=<?php echo $id ?>')" target="_blank">&nbsp;<i class="fa fa-print"></i> Cetak&nbsp;&nbsp;</button>
                </td>
              </tr>
            </table>
        </div>
      </div>
      </div>
    </div>
</div>
<script>
  $(document).ready(function(){
    $('#refresh').click(function(e){
      $("#antrian_sekarang").load("./backend/refreshantrian.php");
    });
  })
</script>
