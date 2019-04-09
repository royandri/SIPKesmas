<?php
  $hak=$_SESSION['posisi'];
  if ($hak!='admin' && $hak!='kepala' && $hak!='karyawan') {
    include_once 'dashboard.php';
    exit();
  }
?>
<section class="content-header">
  <h1>
    Antrian
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Antrian</li>
  </ol>
</section>
<br>
<section class="content">
  <!-- form detail antrian -->
  <div class="row" id="detail_antrian" style="display:none;" >
    <div class="col-xs-12">
      <div class="box box-primary box-solid">
        <div class="box-header with-border">
          <h3 class="box-title"></i> Detail Antrian</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" id="remove"><i class="fa fa-times"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="" action="" method="post">
            <div class="form-group row">
              <div class="col-sm-2">
                ID Berobat
              </div>
              <div class="col-sm-10">
                <input type="teks" name="id_berobat" id="id_berobat" value="" disabled class="form-control" placeholder="ID Berobat" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                No. RM
              </div>
              <div class="col-sm-10">
                <input type="teks" name="no_rm" id="no_rm" disabled value="" class="form-control" placeholder="No. RM" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Tanggal Berobat
              </div>
              <div class="col-sm-10">
                <input type="teks" name="tanggal_berobat" id="tanggal_berobat" disabled value="" class="form-control" placeholder="Tanggal berobat" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Nama Pasien
              </div>
              <div class="col-sm-10">
                <input type="teks" name="nama_pasien" id="nama_pasien" disabled value="" class="form-control" placeholder="Nama pasien" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Jenis Kelamin
              </div>
              <div class="col-sm-10">
                <input type="teks" name="jenis_kelamin" id="jenis_kelamin" disabled value="" class="form-control" placeholder="Jenis kelamin" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Tempat Lahir
              </div>
              <div class="col-sm-10">
                <input type="teks" name="tempat_lahir" id="tempat_lahir" disabled value="" class="form-control" placeholder="Tempat lahir" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Tanggal Lahir
              </div>
              <div class="col-sm-10">
                <input type="teks" name="tanggal_lahir" id="tanggal_lahir" disabled value="" class="form-control" placeholder="Tanggal lahir" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Jenis Pasien
              </div>
              <div class="col-sm-10">
                <input type="teks" name="jenis_pasien" id="jenis_pasien" disabled value="" class="form-control" placeholder="Jenis pasien" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                No. Jaminan
              </div>
              <div class="col-sm-10">
                <input type="teks" name="no_jaminan" id="no_jaminan" disabled value="" class="form-control" placeholder="No. Jaminan" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Tujuan
              </div>
              <div class="col-sm-10">
                <input type="teks" name="tujuan" id="tujuan" disabled value="" class="form-control" placeholder="Tujuan" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                No. Antrian
              </div>
              <div class="col-sm-10">
                <input type="teks" name="no_antrian" id="no_antrian" disabled value="" class="form-control" placeholder="No. Antrian" required="true">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-2">
                Status
              </div>
              <div class="col-sm-10">
                <input type="teks" name="status" id="status" disabled value="" class="form-control" placeholder="Status" required="true">
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- menampilkand tabel data pengaduan -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box  box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title"></i> Daftar Antrian</h3>
          <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
        </div>
        <div class="input-group input-group-sm" >
          &nbsp;&nbsp;&nbsp;
          <button  type="reset" name="tambah" id="tambah" class="btn btn-success" style="display: none;">
            <i class="fa fa-user-plus"></i>Tambah Antrian
          </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">

          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th hidden>id</th>
              <th>No. RM</th>
              <th>Tanggal Berobat</th>
              <th>Nama Pasien</th>
              <th>Tujuan</th>
              <th>No. Antrian</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody id="datapasien">
              <?php
              include_once './backend/tampilantrian.php';
              $no=0;
              while ($a = mysqli_fetch_object($pasien)) {
              $no= $no+1;
              ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td hidden><?php echo $a->id_berobat; ?></td>
              <td><?php echo $a->no_rm; ?></td>
              <td><?php echo $a->tanggal_berobat; ?></td>
              <td><?php echo $a->nama_pasien; ?></td>
              <td><?php echo $a->tujuan; ?></td>
              <td><?php echo $a->no_antrian; ?></td>
              <td><?php echo $a->status; ?></td>
              <td>
                <div class="btn-group-horizontal btn-group-sm">
                  <input type="hidden" name="norm" value="<?php echo $a->no_rm;?>">
                  <a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="detailantrian(<?php echo "'$a->id_berobat'"; ?>)"><i class="fa fa-eye"></i> Detail</a>
                </div>

              </td>
            </tr>
          <?php } ?>
        </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</section>
<script>
$(document).ready(function(){
  $('#remove').click(function(e){
    e.preventDefault();
    $('#detail_antrian').hide(350);
  });
});
function detailantrian(idberobat){
  $.ajax({
    type: "GET",
    url : "backend/detailantrian.php?",
    data: "id_berobat="+idberobat,
    success: function(data){
      var $respone = $(data);
      $('#id_berobat').val($respone.filter('#id_berobat').text());
      $('#no_rm').val($respone.filter('#no_rm').text());
      $('#tanggal_berobat').val($respone.filter('#tanggal_berobat').text());
      $('#nama_pasien').val($respone.filter('#nama_pasien').text());
      $('#jenis_kelamin').val($respone.filter('#jenis_kelamin').text());
      $('#tempat_lahir').val($respone.filter('#tempat_lahir').text());
      $('#tanggal_lahir').val($respone.filter('#tanggal_lahir').text());
      $('#jenis_pasien').val($respone.filter('#jenis_pasien').text());
      $('#no_jaminan').val($respone.filter('#no_jaminan').text());
      $('#tujuan').val($respone.filter('#tujuan').text());
      $('#no_antrian').val($respone.filter('#no_antrian').text());
      $('#status').val($respone.filter('#status').text());
      $('#detail_antrian').hide(350);
      $('#detail_antrian').slideDown("slow");
    }

  });
}

$(function () {
  $('#example1').DataTable()
});
</script>
