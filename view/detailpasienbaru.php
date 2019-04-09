<!-- created by: Roy Andri Jumat, 22-06-2018 -->
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
    <div class="col-md-6">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
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
    <div class="col-md-6">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8">
          <div class="panel" id="cek">
            <div class="panel-heading" style="background-color:#205E32;">
              <h3 align="center" style="color:white;">Kartu Anggota</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <td>Nama KK</td>
                      <td>:</td>
                      <td><?php echo $nama_pasien; ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td>
                        <?php echo $alamat; ?> <br>
                        <table>
                          <tr>
                            <td>Kel</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>  <?php echo $kelurahan; ?></td>
                          </tr>
                          <tr>
                            <td>Kec</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>  <?php echo $kecamatan; ?></td>
                          </tr>
                          <tr>
                            <td>Kab</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>  <?php echo $kabupaten; ?></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td>Nomor RM</td>
                      <td>:</td>
                      <td>  <?php echo $nomor_rm; ?></td>
                    </tr>
                  </table>
                </div>
                <button type="submit" class="form-control btn" style="background-color:#205E32; color:white;" name="cetakkartu" onclick="window.open('cetak/cetakkartu.php?norm=<?php echo $nomor_rm ?>')" target="_blank"><i class="fa fa-print"></i> Cetak Kartu Anggota</button>
            </div>
          </div>
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
