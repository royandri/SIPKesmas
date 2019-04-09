<!-- created by: Roy Andri Rabu, 16-06-2018 -->
<?php include_once './backend/ambilstatus.php';
if ($status_antrian->status_antrian == 'Berhenti') {
  header('Location: menu.php?f=pendaftaran');
}
?>
<div class="container" align="center">
  <div class="upper-section">
    <h2 align="center">Pendaftaran Pasien Baru</h2>
    <table align="center">
      <th>
        <td><hr id="hr1"></td>
        <td><hr id="hr1"></td>
      </th>
    </table>
  </div>
  <br><br>
  <!-- registrasi pasien barus -->
  <form action="" method="post">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="panel" id="formreg">
          <div class="panel-heading" style="background-color:#205E32;">
            <h3 align="center" style="color:white;">Formulir Regristrasi Pasien Baru</h3>
          </div>
          <?php include_once './backend/otomatis.php';?>
          <div class="panel-body">
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
                <tr hidden>
                  <td>ID Berobat</td>
                  <td>:</td>
                  <td>
                    <div id="ambilid">
                      <input type="teks" name="id_berobat"  value="<?php echo $id; ?>" required="true">
                      <?php echo $id; ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>No. RM</td>
                  <td>:</td>
                  <td>
                    <div id="ambilnorm">
                      <input type="hidden" name="norekmed"  value="<?php echo $norm; ?>" required="true">
                      <?php echo $norm; ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td>:</td>
                  <td><input type="hidden" name="tanggal_se"  value="<?php echo $tanggal; ?>" required="true">
                    <?php echo $tanggal; ?>
                  </td>
                </tr>
                <tr>
                  <td>Nama Pasien</td>
                  <td>:</td>
                  <td><input type="text" name="namapasien" id="namapasien" minlength="4" required placeholder="Nama Pasien" oninput="ceknama()"></td>
                </tr>
                <tr>
                  <td>Nama KK</td>
                  <td>:</td>
                  <td><input type="text" name="namakk" id="namakk"  minlength="4"  required oninput="cekkk()" placeholder="Nama KK" required="true"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td>
                    <select name="jk" required="true" onchange="document.getElementById('kelamin').value=this.options[this.selectedIndex].text">
                      <option value="">Pilihan</option>
                      <option value="pria">L</option>
                      <option value="wanita">P</option>
                    </select>
                    <input type="hidden" name="kelamin" id="kelamin" value="" required="true">
                  </td>
                </tr>
                <tr>
                  <td>Pekerjaan</td>
                  <td>:</td>
                  <td><input type="text" name="pekerjaan" id="pekerjaan" minlength="2" oninput="cekpekerjaan()" required placeholder="Pekerjaan" required="true" ></td>
                </tr>
                <tr>
                  <td>Alamat Lengkap</td>
                  <td>:</td>
                  <td>
                    <textarea type="text" name="alamat" id="alamat" minlength="6" class="besar" placeholder="Alamat" required="true" ></textarea><br><br>
                    Kel: &nbsp;<input type="text" class="kecil" name="kel"id="kel" minlength="4" oninput="cekkel()" placeholder="Kelurahan" required="true" >
                    Kec: <input type="text" class="kecil" name="kec" id="kec" minlength="4" oninput="cekkec()" placeholder="Kecamatan" required="true" ><br><br>
                    Kab: <input type="text" class="sedang" name="kab" id="kab" minlength="4" oninput="cekkab()" placeholder="Kabupaten" required="true" >
                  </td>
                </tr>
                <tr>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td>:</td>
                  <td><input type="text" name="tempatlahir" id="tempatlahir" minlength="4" oninput="cektempatlahir()" placeholder="Tempat Lahir" required="true" ></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td>:</td>
                  <td>
                    <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                      <div class="row">
                        <div class="col-md-7">
                          <input class="" type="text" name="tanggallahir"  placeholder="yyyy-mm-dd" required>
                        </div>
                        <div class="col-md-5">
                          <span class="btn hidden"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                    <!-- <input type="date" name="tanggallahir" data-date="" data-date-format="yyyy-mm-dd"  required oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="setCustomValidity('')"> -->
                  </td>
                </tr>
                <tr>
                  <td>Agama</td>
                  <td>:</td>
                  <td>
                    <select name="agm" required="true" id="pilihagama" onchange="document.getElementById('agama').value=this.options[this.selectedIndex].text">
                      <option value="">Pilihan</option>
                      <option value="islam">Islam</option>
                      <option value="kristen">Kristen</option>
                      <option value="katholik">Katholik</option>
                      <option value="hindu">Hindu</option>
                      <option value="budha">Budha</option>
                    </select>
                    <input type="hidden" name="agmz" id="agama" value="" required="true">
                  </td>
                </tr>
                <tr>
                  <td>Jenis Pasien</td>
                  <td>:</td>
                  <td>
                    <select name="jenispasien" onchange="jaminan();" id="jmn" required="true" onchange="document.getElementById('jenis').value=this.options[this.selectedIndex].text">
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
                <tr id="tampiljamin">
                  <td>No. Jaminan</td>
                  <td>:</td>
                  <td><input type="number" id="jamin" minlength="5" name="no_jaminan" value="0" placeholder="No Jaminan"></td>
                </tr>
                <tr>
                  <td>Tujuan</td>
                  <td>:</td>
                  <td>
                    <select onchange="diklik()"id="pilihbp" name="tuju" required="true" onchange="document.getElementById('tujuan').value=this.options[this.selectedIndex].text">
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
                    <button type="submit" name="daftar_pasien_baru" class="btn" style="background-color:#205E32; color:white;" id="daftar" disabled="disabled"  onclick="ceksemua()">
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
<?php
include_once './backend/tambahpasienbaru.php';
?>
<script>
  $(document).ready(function(){
    $("#tampiljamin").hide();
  })
  function diklik(){
    if (document.getElementById("pilihbp").value!="BP Umum") {
      swal({
        title: "",
        text: "Mohon maaf, sistem hanya melayani pendaftaran BP Umum.",
        type: "warning",
        confirmWarningText: "Oke"
      },
      function () {
        document.getElementById("pilihbp").value="BP Umum";
      });
    }
  }
  function jaminan(){
    if (document.getElementById("jmn").value!="Umum") {
      $("#tampiljamin").show();
    }else{
      $("#tampiljamin").hide();
    }
  }
  $(document).ready(function(){
    $('#setuju').on('click',function () {
     if ($('#setuju').is(':checked')) {
       $('#daftar').removeAttr('disabled');
     }else {
       $('#daftar').attr('disabled','true');
     }
   });
  })
  $(".input-group.date").datepicker({autoclose: true, todayHighlight: true, startDate: '1930-01-01', endDate:'now' });
  function refresh(){
    $("#ambilnorm").load("./backend/nomorrm.php");
    $("#ambilid").load("./backend/id.php");
    $("#ambilnoantrian").load("./backend/refantrian.php");
  }
  $(function() {
    setInterval(refresh, 100);
  });

  function ceknama(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("namapasien");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Nama pasien wajib huruf !");
        namapasien.value='';
    }
  }

  function cekkk(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("namakk");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Nama KK wajib huruf !");
        namakk.value='';
    }
  }

  function cekpekerjaan(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("pekerjaan");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Pekerjaan wajib huruf !");
        pekerjaan.value='';
    }
  }

  function cekkec(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("kec");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Kecamatan wajib huruf !");
        kec.value='';
    }
  }

  function cekkel(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("kel");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Kelurahan wajib huruf !");
        kel.value='';
    }
  }

  function cekkab(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("kab");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Kabupaten wajib huruf !");
        kab.value='';
    }
  }

  function cektempatlahir(){
    var validasiHuruf = /^[a-zA-Z ]+$/;
    var dtInput = document.getElementById("tempatlahir");
    if (dtInput.value.match(validasiHuruf)) {
    } else {
        alert("Tempat lahir wajib huruf !");
        tempatlahir.value='';
    }
  }

  function ceksemua(){
    ceknama();
    cekkk();
    cekkel();
    cekkec();
    cekkab();
    cektempatlahir();
    cekpekerjaan();
  }
</script>
