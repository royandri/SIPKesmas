<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Statistik</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<?php include_once './backend/datadashboard.php'; ?>
<br>
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo $jumantrian->jumlah_antrian; ?></h3>
          <p>Antrian Hari Ini</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>
        </div>
        <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo $blmselesai->antrian_blmselesai; ?></h3>
          <p>Belum Dipanggil</p>
        </div>
        <div class="icon">
          <i class="ion ion-ios-people"></i>
        </div>
        <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo $sdhselesai->antrian_selesai; ?></h3>

          <p>Sudah Dipanggil</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-stalker"></i>
        </div>
        <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo $jumlahpasien->jumlah_pasien; ?></h3>

          <p>Jumlah Pasien</p>
        </div>
        <div class="icon">
          <i class="ion ion-medkit"></i>
        </div>
        <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <b>Visi Puskesmas Mlati I</b>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menjadi Puskesmas Mitra Keluarga dan Masyarakat dengan Pelayanan Prima dan Profesional</p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <b>Misi Puskesmas Mlati I</b>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
            </button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ol>
            <li>Meningkatkan profesinalisme secara berkesinambungan dalam pengelolaan organisasi dan pelayanan kesehatan.</li>
            <li>Memberikan pelayanan kesehatan dasar yang bermutu.</li>
            <li>Memberdayakan masyarakat untuk lebih mandiri dalam upaya kesehatan.</li>
            <li>Meningkatkan kualitas pencatatan dan pelaporan dalam rangka pengembangan sistem informasi kesehatan (SIK).</li>
            <li>Berkoordinasi dan bekerjasama dengan semua pihak yag terkait dalam pelayanan dan pembangunan kesehatan.</li>
            <li>Mengembangkan sarana dan prasarana sesuai kebutuhan pelayanan masyarakat.</li>
        </ol>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
