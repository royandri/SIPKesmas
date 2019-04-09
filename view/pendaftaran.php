<!-- created by: Roy Andri Rabu, 15-06-2018 -->
<div class="container">
  <div class="upper-section">
    <h2 align="center">Pendaftaran</h2>
    <table align="center">
      <th>
        <td><hr id="hr1"></td>
        <td><hr id="hr1"></td>
      </th>
    </table>
  </div>
  <br><br>
  <?php include_once './backend/ambilstatus.php'; ?>
  <?php
  if ($status_antrian->status_antrian == 'Berjalan') {
    ?>
    <div class="row">
      <div class="col-sm-1 col-xs-12 col-md-1">
      </div>
      <div class="col-sm-5 col-xs-12 col-md-5">
        <div class="panel">
          <div class="panel-heading" style="background-color:#205E32;">
            <h3 align="center" style="color:white;">Pasien Baru</h3>
          </div>
          <div class="panel-body">
            <a class="form-control btn" style="background-color:#205E32; color:white;" href="menu.php?f=pasienbaru#">Pendaftaran Pasien Baru</a>
          </div>
        </div>
      </div>
      <div class="col-sm-5 col-xs-12 col-md-5">
        <div class="panel panel">
          <div class="panel-heading" style="background-color:#205E32;">
            <h3 align="center" style="color:white;">Pasien Lama</h3>
          </div>
          <div class="panel-body">
            <a class="form-control btn" style="background-color:#205E32; color:white;" href="menu.php?f=pasienlama#">Pendaftaran Pasien Lama</a>
          </div>
        </div>
      </div>
    </div>
    <?php
  }else if ($status_antrian->status_antrian == 'Berhenti') {
    ?>
    <div class="row">
      <div class="col-sm-3 col-xs-12 col-md-3">
      </div>
      <div class="col-sm-6 col-xs-12 col-md-6">
        <div class="panel panel">
          <div class="panel-heading" style="background-color:#205E32;">
            <h3 align="center" style="color:white;"><i class="fa fa-spin fa-refresh"></i> Informasi</h3>
          </div>
          <div class="panel-body">
            <p class="text-center">Mohon maaf, saat ini antrian belum dimulai.</p>
            <p class="text-center" >
              <input style="background-color:#205E32; color:white;"  type="button" class="btn" name="" value="Muat Ulang" onClick="window.location.reload()">
              <!-- <a class="btn" href="menu.php?f=pendaftaran#">Muat Ulang</a> -->
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12 col-md-3">
      </div>
    </div>
    <?php
  }
   ?>
</div>
