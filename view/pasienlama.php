<!-- created by: Roy Andri Rabu, 16-06-2018 -->
<?php include_once './backend/ambilstatus.php';
if ($status_antrian->status_antrian == 'Berhenti') {
  header('Location: menu.php?f=pendaftaran');
}

?>
<div class="container" align="center">
  <div class="upper-section">
    <h2 align="center">Pendaftaran Pasien Lama</h2>
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
          <h3 align="center" style="color:white;">Cek Pendaftaran</h3>
        </div>
        <div class="panel-body">
            <form class="" action="" method="post">
              <div class="form-group">
                <div class="text-left">
                  No. RM
                </div>
                <input type="teks" class="form-control"  id="rm" name="rm" placeholder="Nomor Regristrasi"required oninvalid="this.setCustomValidity('Anda belum menginputkan No. RM')" oninput="setCustomValidity('')">
                <br>
                <div class="text-left">
                  Tanggal Lahir
                </div>
                <div class='input-group date tgl' data-date="" data-date-format="yyyy-mm-dd">
                  <input type='teks'id='tgllhr' name="tgl_lahir" class="form-control tanggal" aria-describedby="img-addon" placeholder="yyyy-mm-dd" required oninvalid="this.setCustomValidity('Anda belum menginputkan tanggal lahir')" oninput="setCustomValidity('')">
                  <span class="input-group-addon" id="img-addon">
                    <span class="fa fa-calendar"></span>
                  </span>
                </div>
                <script type="text/javascript">
                  $(document).ready(function () {
                    $('.tgl').datepicker({
                      format: "yyyy-mm-dd",
                      autoclose:true
                    });
                  });
                </script>
                </div>
                <br>
                <button type="submit" class="form-control btn" id="cekregistrasi" style="background-color:#205E32; color:white;" name="cek_pendaftaran">Cek</button>
              </div>
            </form>
        </div>
      </div>
    </div>
    <!-- registrasi pasien lama -->
    <form class="" action="" method="post">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="panel" id="formreg" style="display: none;">
            <div class="panel-heading" style="background-color:#205E32;">
              <h3 align="center" style="color:white;">Formulir Regristrasi Pasien Lama</h3>
            </div>
            <div class="panel-body">
              <?php
              include_once './backend/cekpendaftaran.php';
              ?>
              <div class="table-responsive">
                <table class="table">
                  <tr hidden>
                    <td>No. Antrian</td>
                    <td>:</td>
                    <td>
                      <?php include_once './backend/ambilantrian.php'; ?>
                      <div id="ambilnoantrian">
                        <input type="teks" name="antrian"  value="<?php echo $noantri; ?>" required="true">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>No. RM</td>
                    <td>:</td>
                    <td><input type="hidden" name="no_rm" value="<?php echo $rm ?>" required="true" ><?php echo $rm ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="hidden" name="tgl" value="<?php date_default_timezone_set("Asia/Jakarta"); echo  date("Y-m-d"); ?>" required="true" ><?php date_default_timezone_set("Asia/Jakarta");
                    echo  date("Y-m-d"); ?></td>
                  </tr>
                  <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="namapasien" minlength="4" oninput="ceknamapasien()" placeholder="Nama Pasien" value="<?php echo $dtpasien->nama_pasien ?>" required="true"></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                      <select name="jk" required="true" onchange="document.getElementById('kelamin').value=this.options[this.selectedIndex].text">
                        <?php
                        if ($dtpasien->jenis_kelamin == "L") {
                          ?>
                          <option value="">Pilihan</option>
                          <option value="pria" selected="true">L</option>
                          <option value="wanita">P</option>
                          <?php
                        }else {
                          ?>
                          <option value="">Pilihan</option>
                          <option value="pria">L</option>
                          <option value="wanita" selected="true">P</option>
                          <?php
                        }
                         ?>
                      </select>
                      <input type="hidden" name="kelamin" id="kelamin" value="<?php echo $dtpasien->jenis_kelamin ?>" required="true">
                    </td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat" id="tLahir" minlength="4" oninput="ceklahir()" placeholder="Tempat Lahir" value="<?php echo $dtpasien->tempat_lahir ?>" required="true"></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                      <div class="input-group date tng" data-date="" data-date-format="yyyy-mm-dd">
                        <div class="row">
                          <div class="col-md-7">
                            <input class="" type="text" name="tanggallahir" value="<?php echo $dtpasien->tanggal_lahir ?>" placeholder="yyyy-mm-dd" required>
                          </div>
                          <div class="col-md-5">
                            <span class="btn hidden"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Jenis Pasien</td>
                    <td>:</td>
                    <td>
                      <select name="jenispasien" onchange="klikjaminan();" id="jmn2"  required="true" onchange="document.getElementById('jenis').value=this.options[this.selectedIndex].text">
                        <option value="">Pilihan</option>
                        <option value="Umum">Umum</option>
                        <option value="bpjspns">BPJS PNS</option>
                        <option value="bpjspbi">BPJS PBI</option>
                        <option value="bpjsmandiri">BPJS Mandiri</option>
                        <option value="bpjsperusahaan">BPJS Perusahaan</option>
                        <option value="jamkesos">Jamkesos</option>
                      </select>
                      <input type="hidden" name="jenis" id="jenis" value="" required="true">
                    </td>
                  </tr>
                  <tr id="tampiljaminan2">
                    <td>No. Jaminan</td>
                    <td>:</td>
                    <td><input type="number" id="jamin" name="jaminan" value="0" placeholder="No. Jaminan" required="true"></td>
                  </tr>
                  <tr>
                    <td>Tujuan</td>
                    <td>:</td>
                    <td>
                      <select onchange="diklik();" id="pilihbp2" name="tujuanpasien" required="true" onchange="document.getElementById('tujuan').value=this.options[this.selectedIndex].text">
                        <option value="">Pilihan</option>
                        <option value="BP Umum">BP Umum</option>
                        <option value="bpgigi">BP Gigi</option>
                        <option value="kiahamil">KIA Hamil</option>
                        <option value="kiasakit">KIA Sakit</option>
                        <option value="kb">KB</option>
                        <option value="imunisasi">Imunisasi</option>
                        <option value="caten">Caten</option>
                        <option value="kebidanan">Kebidanan</option>
                        <option value="fisioterapi">Fisioterapi</option>
                        <option value="rtindakan">R. Tindakan</option>
                        <option value="gizi">Gizi</option>
                        <option value="psikolog">Psikolog</option>
                      </select>
                      <input type="hidden" name="tujuan" id="tujuan" value="" required="true">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <div class="checkbox">
                        <label><input type="checkbox" value="setuju" id="setuju">Saya menyatakan bahwa semua data yang saya inputkan adalah benar.</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <button type="submit" name="daftar_pasien_lama" class="btn" style="background-color:#205E32; color:white;" id="daftar"  disabled="disabled" onclick="cekall()">
                        <i class="fa fa-send"></i> Daftar
                      </button>
                      <button type="reset" name="batal" class="btn btn-primary" id="batal">
                        <i class="fa fa-close"></i> Batal
                      </button>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>
<?php include_once './backend/tambahpasienlama.php'; ?>

<script>
$(document).ready(function(){
  $("#tampiljaminan2").hide();
})
function klikjaminan(){
  if (document.getElementById("jmn2").value!="Umum") {
    $("#tampiljaminan2").show();
  }else{
    $("#tampiljaminan2").hide();
  }
}
  function diklik(){
    if (document.getElementById("pilihbp2").value!="BP Umum") {
      swal({
        title: "",
        text: "Mohon maaf, sistem hanya melayani pendaftaran BP Umum.",
        type: "warning",
        confirmWarningText: "Oke"
      },
      function () {
        document.getElementById("pilihbp2").value="BP Umum";
      });
    }
  }
  $(document).ready(function(){
    $('#batal').click(function(e){
      e.preventDefault();
      $('#cek').show(500);
      $('#rm').val('');
      $('#tgllhr').val('');
      $('#formreg').hide();
    });

    $('#setuju').on('click',function () {
     if ($('#setuju').is(':checked')) {
       $('#daftar').removeAttr('disabled');
     }else {
       $('#daftar').attr('disabled','true');
     }
   });
  })
  $(".tng").datepicker({autoclose: true, todayHighlight: true, startDate: '1930-01-01', endDate:'now'});
  function refresh(){
    $("#ambilnoantrian").load("./backend/refantrian.php");
  }
  $(function() {
    setInterval(refresh, 100);
  });

  function ceknamapasien(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("namapasien");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Nama pasien wajib huruf !");
        namapasien.value='';
    }
  }

  function ceklahir(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("tLahir");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Tempat lahir wajib huruf !");
        tLahir.value='';
    }
  }

  function cekall(){
    ceknamapasien();
    ceklahir();
  }
</script>
