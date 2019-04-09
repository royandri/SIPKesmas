<div class="container">
  <div class="upper-section">
    <h2 align="center">Kontak Kami</h2>
    <table align="center">
      <th>
        <td><hr id="hr1"></td>
        <td><hr id="hr1"></td>
      </th>
    </table>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-6 col-xs-12 col-md-6">
      <div class="panel">
        <div class="panel-heading" style="background-color:#205E32;">
          <h3 align="center" style="color:white;">Kontak Kami</h3>
        </div>
        <div class="panel-body">
          <table>
             <tr>
               <td>
                 <h4>
                   <span class="fa fa-location-arrow"> Puskesmas Mlati I, Jalan Intan, Kutu Tegal, Sinduadi</span>
                 </h4>
               </td>
             </tr>
             <tr>
               <td>
                 <h4>
                   <span class="fa fa-clock-o"> Pendaftaran : Senin - Kamis 07:30-12:00 WIB</span>
                 </h4>
               </td>
             </tr>
             <tr>
               <td>
                 <h4>
                   <span class="fa fa-clock-o"> Pendaftaran : Jumat 07:30-10:00 WIB</span>
                 </h4>
               </td>
             </tr>
             <tr>
               <td>
                 <h4>
                   <span class="fa fa-clock-o"> Pendaftaran : Sabtu 07:30-11:00 WIB</span>
                 </h4>
               </td>
             </tr>
             <tr>
               <td>
                 <h4>
                   Layanan Telepon
                 </h4>
                   <span class="fa fa-phone"> 0274 (4539614)</span>
               </td>
             </tr>
           </table>

        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xs-12 col-md-6">
      <div class="panel">
        <div class="panel-heading" style="background-color:#205E32;">
          <h3 align="center" style="color:white;">Kritik dan Saran</h3>
        </div>
        <div class="panel-body">
          <form class="form-group" action="" method="post">
              Nama
              <br>
              <input type="text" name="nama_pengirim"  minlength="5" required placeholder="Nama" id="namapengadu" class="form-control"  onchange="cekhuruf()">
              <br>
              Email
              <br>
              <input type="email" name="email_pengirim"  minlength="5" autocomplete="email" placeholder="alamatemail@domain.com" class="form-control" required>
              <br>
              Isi Pesan
              <br>
              <textarea class="form-control" minlength="5" name="pesan_pengirim" rows="8" cols="40" placeholder="Isi Pesan" required></textarea>
              <br>
              <button type="submit" class="form-control btn" style="background-color:#205E32; color:white;" name="tambah_pengaduan" onclick="cekhuruf()">Kirim Pesan</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function cekhuruf()
        {
            var validasiHuruf = /^[a-zA-Z ]+$/;
            var namaPengadu = document.getElementById("namapengadu");
            if (namaPengadu.value.match(validasiHuruf)) {

            } else {
                alert("Nama wajib huruf !");
                namapengadu.value='';
            }
        }
</script>
<?php
include_once './backend/tambahpengaduan.php';
?>
