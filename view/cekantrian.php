<div class="container" align="center">
  <div class="upper-section">
    <h2 align="center">Cek Status Antrian</h2>
    <table align="center">
      <th>
        <td><hr id="hr1"></td>
        <td><hr id="hr1"></td>
      </th>
    </table>
  </div>
  <br><br>
  <div class="row" id="cekantrian">
    <div class="col-xs-12 col-sm-4 col-md-4">
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
      <form class="" action="" method="post">
        <div class="form-group">
          Silahkan masukkan No. RM Anda
          <input type="text" class="form-control" name="rm" id="rm" placeholder="No. RM"required oninvalid="this.setCustomValidity('Anda belum menginputkan No. RM')" oninput="setCustomValidity('')">
          <br>
          <button type="submit" class="btn" style="background-color:#205E32; color:white;" name="cek_status_antrian"><i class="fa fa-check"></i> Cek</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4">
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
      <div class="panel" id="cek" style="display: none;">
        <div class="panel-heading" style="background-color:#205E32;">
          <h3 align="center" style="color:white;">Nomor Antrian</h3>
        </div>
        <div class="panel-body">
            <?php include_once './backend/cekstatusantrian.php'; ?>
            <b style="font-size:70px;">  <?php echo $no_antrian; ?></b><br>
            Nomor antrian sekarang <b id="antrian_sekarang"><?php include_once './backend/antriansekarang.php'; ?></b><br><br>
            <table>
              <tr>
                <td>
                  <button type="" class="form-control btn" style="background-color:#205E32; color:white;" id="refresh" name="refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </td>
                <td>&nbsp;</td>
                <td>
                  <button type="submit" class="form-control btn" style="background-color:#205E32; color:white;" name="cetakantrian" onclick="window.open('cetak/cetakhasilcek.php?rm=<?php echo $rm ?>')" target="_blank">&nbsp;<i class="fa fa-print"></i> Cetak&nbsp;&nbsp;</button>
                </td>
                <td>&nbsp;</td>
                <td>
                  <button type="reset" class="form-control btn" style="background-color:#205E32; color:white;" name="batal" id="batal">&nbsp;<i class="fa fa-close"></i> Batal&nbsp;&nbsp;</button>
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
    $('#batal').click(function(e){
      e.preventDefault();
      $('#cekantrian').show(500);
      $('#rm').val('');
      $('#cek').hide();
    });

    $('#refresh').click(function(e){
      $("#antrian_sekarang").load("./backend/refreshantrian.php");
    });
  })
</script>
