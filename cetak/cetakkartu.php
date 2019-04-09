<!-- created by: Roy Andri Minggu, 24-06-2018 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Puskesmas Mlati I</title>
    <link href="../assets/images/icon/favicon.png" rel="shortcut icon" type="image/x-icon">
  </head>
  <style>
  .isi {
      border-collapse: collapse;
      width: 100%;
  }
  .dalem {
      padding: 4px;
      text-align: left;
      border-bottom: 1px solid #ddd;
  }
  .tabelkecil{
    padding: 6px;
  }
  </style>
<body onload="javascript:window.print()">
  <div class="">
    <?php include '../backend/cetakkartuanggota.php'; ?>
    <div class="text-center">
      <br>
      <table class="struk" align="center" style="border: 1px solid black; width:290px;">
        <tr>
          <td>
            <table style="line-height:0.6;">
              <tr>
                <td>
                  <img style="width:35px;" src="../assets/images/icon/sleman.gif" alt="">
                </td>
                <td nowrap align="center">
                  <h style="font-size:8px;">PEMERINTAH KABUPATEN SLEMAN</h><br>
                  <h style="font-size:8px;"><b>DINAS KESEHATAN</b></h> <br>
                  <h style="font-size:8px;"><b>UPT PUSKESMAS MLATI I</b></h> <br>
                  <h style="font-size:6px;">&nbsp;&nbsp;Alamat: Jln. Intan, Kutu Tegal, Sinduadi, Mlati, Sleman, Telp. (0274) 4539614</h>&nbsp;
                </td>
                <td>
                  <table style="border: 1px solid black; width:50px;">
                  <tr>
                    <td>
                      <table style="font-size:3px; line-height:0.4;">
                        <tr>
                          <td>No. Form</td>
                          <td>:</td>
                          <td>FM-PDF-10</td>
                        </tr>
                        <tr>
                          <td>Tg Terbit</td>
                          <td>:</td>
                          <td>02-01-2015</td>
                        </tr>
                        <tr>
                          <td>Revisi</td>
                          <td>:</td>
                          <td>00</td>
                        </tr>
                        <tr>
                          <td>Hal</td>
                          <td>:</td>
                          <td>1</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </table>
                </td>
              </tr>
              <tr style="padding: 1px;">
                <td colspan="3" align="center">
                  <hr style="height: 1px; color:black; background-color: black;">
                  <b style="font-size:6px;">KARTU TANDA PENGENAL</b>
                </td>
              </tr>
              <tr>
                <td colspan="3" align="center">
                  <table class="isi" style="font-size:8px;">
                    <tr>
                      <td class="dalem" style="border:0;">Nama KK</td>
                      <td class="dalem">:</td>
                      <td class="dalem"> <?php echo $nama_kk ?></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem" style="border:0;"> <?php echo $kelamin; ?></td>
                    </tr>
                    <tr>
                      <td class="dalem" style="border:0;">Umur</td>
                      <td class="dalem">:</td>
                      <td class="dalem"><?php echo $umur ?></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem">Askes/Umum/</td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                    </tr>
                    <tr>
                      <td class="dalem" style="border:0;">Pekerjaan</td>
                      <td class="dalem">:</td>
                      <td class="dalem"><?php echo $pekerjaan ?></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                    </tr>
                    <tr>
                      <td class="dalem" style="border:0;">Alamat</td>
                      <td class="dalem">:</td>
                      <td class="dalem"><?php echo $alamat ?></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                    </tr>
                    <tr>
                      <td class="dalem" style="border:0;"></td>
                      <td class="dalem">:</td>
                      <td class="dalem"><?php echo $kelurahan .", " .$kecamatan .", " .$kabupaten ?></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                    </tr>
                    <tr>
                      <td class="dalem" style="border:0;">Nomor RM</td>
                      <td class="dalem">:</td>
                      <td class="dalem"><?php echo $nomorrekmed ?></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                      <td class="dalem"></td>
                    </tr>
                  </table>
                  <b style="font-size:6px;">JANGAN LUPA DIBAWA SETIAP ANDA DATANG KE PUSKESMAS</b>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>
