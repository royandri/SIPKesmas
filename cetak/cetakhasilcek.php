<!-- created by: Roy Andri Minggu, 24-06-2018 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Puskesmas Mlati I</title>
    <link href="../assets/images/icon/favicon.png" rel="shortcut icon" type="image/x-icon">
  </head>
  <body  onload="javascript:window.print()">
    <div class="">
      <div class="text-center">
        <br>
        <?php include '../backend/cetakhasilcekantrian.php'; ?>
        <table class="struk" align="center" style="border: 1px solid black; width:290px;">
          <tr>
            <td>
              <div class="" align="center">
                <br>
                <img style="width:120px;" src="../assets/images/icon/logo.png" alt=""><br>
                <h4><b>UPT Puskesmas Mlati I</b></h4>
                <b>Kota Sleman, Yogyakarta</b><br>
                Jln. Intan Kutu Tegal, Sinduadi, Mlati<br>
                0274 (4539614)<br>
                ============================
                <b>Nomor RM : <?php echo $norekmed; ?></b><br>
                ============================
                <b style="font-size:23px;">Nomor Antrian</b><br>
                <b style="font-size:70px;"><?php echo $no_antrian; ?></b><br>
                <b><?php echo $tujuan; ?></b><br>
                ============================<br>
                <?php date_default_timezone_set("Asia/Jakarta"); echo date("d-m-Y"); ?> |
                <?php date_default_timezone_set("Asia/Jakarta"); echo date("H:i:s"); ?><br>
                Terima Kasih Atas Kunjungan Anda<br><br>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
