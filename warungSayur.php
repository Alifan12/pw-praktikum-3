<?php
$no = 1;
$berat_L = array();
$namaBarang = array(
  "Sawi Hijau", "Telur", "Wortel",
  "Daun Salam", "Tomat", "Jagung",
  "Paprika", "Kangkung", "Daun Bawang",
  "Cabai", "Bawang Putih", "Bawang Merah",
  "Kacang Panjang", "Bayam", "Kentang",
  "Buncis", "Beras", "Minyak Sayur"
);

$berat_Kg = array(
  7, 10, 6,
  2, 5, 9,
  6, 4, 4.5,
  5, 8, 11,
  2, 2, 4,
  1, 20, 9
);

$stokBarang = array(
  35, 80, 62,
  120, 50, 0,
  37, 12, 20,
  245, 65, 244,
  7, 0, 64,
  50, 500, 9
);

for ($i = 0; $i < count($berat_Kg); $i++) {
  $berat_gram[$i] = $berat_Kg[$i] * 1000;
  $berat_mg[$i] = $berat_Kg[$i] * 1000000;

  if ($namaBarang[$i] == "Minyak Sayur" || $namaBarang[$i] == "Beras") {
    $berat_L[$i] = (float) $berat_Kg[$i] / 0.753;
  } else {
    $berat_L[$i] = "-";
  }
}

for ($i = 0; $i < count($stokBarang); $i++) {
  if ($stokBarang[$i] == 0) {
    $kosong = ".kosong";
  };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Konversi Berat Sayur</title>
  <link rel="stylesheet" href="stylesWS.css">
</head>

<body>
  <div class="header">
    <img src="1.jpg"><span>WSPJ</span>

  </div>

  <div class="main">
    <h1>Tabel Konversi Barang - Warung Sayur Pak Joy</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th style="width:10px">No</th>
            <th style="width: 200px;">Nama Barang</th>
            <th style="width: 80px;">Berat(Kg)</th>
            <th style="width: 100px;">Berat(g)</th>
            <th style="width: 100px;">Berat(mg)</th>
            <th style="width: 100px;">Berat(L)</th>
            <th style="width: 80px;">Stok</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td style="width: 27px"><?php echo $no++ ?></td>
            <td style="width: 200px;"><?php echo $namaBarang[0] ?></td>
            <td style="width: 100px;"><?php echo $berat_Kg[0] ?></td>
            <td style="width: 100px;"><?php echo $berat_gram[0] ?></td>
            <td style="width: 100px;"><?php echo $berat_mg[0] ?></td>
            <td style="width: 100px;"><?php echo $berat_L[0] ?></td>
            <td style="width: 80px;"><?php echo $stokBarang[0] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[1] ?></td>
            <td><?php echo $berat_Kg[1] ?></td>
            <td><?php echo $berat_gram[1] ?></td>
            <td><?php echo $berat_mg[1] ?></td>
            <td><?php echo $berat_L[1] ?></td>
            <td class="$kosong"><?php echo $stokBarang[1] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[2] ?></td>
            <td><?php echo $berat_Kg[2] ?></td>
            <td><?php echo $berat_gram[2] ?></td>
            <td><?php echo $berat_mg[2] ?></td>
            <td><?php echo $berat_L[2] ?></td>
            <td class="$kosong"><?php echo $stokBarang[2] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[3] ?></td>
            <td><?php echo $berat_Kg[3] ?></td>
            <td><?php echo $berat_gram[3] ?></td>
            <td><?php echo $berat_mg[3] ?></td>
            <td><?php echo $berat_L[3] ?></td>
            <td class="$kosong"><?php echo $stokBarang[3] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[4] ?></td>
            <td><?php echo $berat_Kg[4] ?></td>
            <td><?php echo $berat_gram[4] ?></td>
            <td><?php echo $berat_mg[4] ?></td>
            <td><?php echo $berat_L[4] ?></td>
            <td class="$kosong"><?php echo $stokBarang[4] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[5] ?></td>
            <td><?php echo $berat_Kg[5] ?></td>
            <td><?php echo $berat_gram[5] ?></td>
            <td><?php echo $berat_mg[5] ?></td>
            <td><?php echo $berat_L[5] ?></td>
            <!-- <td class="$kosong"><?php echo $stokBarang[13] ?></td> -->
            <td style="background-color: red; color:white"><?php echo $stokBarang[5] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[6] ?></td>
            <td><?php echo $berat_Kg[6] ?></td>
            <td><?php echo $berat_gram[6] ?></td>
            <td><?php echo $berat_mg[6] ?></td>
            <td><?php echo $berat_L[6] ?></td>
            <td class="$kosong"><?php echo $stokBarang[6] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[7] ?></td>
            <td><?php echo $berat_Kg[7] ?></td>
            <td><?php echo $berat_gram[7] ?></td>
            <td><?php echo $berat_mg[7] ?></td>
            <td><?php echo $berat_L[7] ?></td>
            <td class="$kosong"><?php echo $stokBarang[7] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[8] ?></td>
            <td><?php echo $berat_Kg[8] ?></td>
            <td><?php echo $berat_gram[8] ?></td>
            <td><?php echo $berat_mg[8] ?></td>
            <td><?php echo $berat_L[8] ?></td>
            <td class="$kosong"><?php echo $stokBarang[8] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[9] ?></td>
            <td><?php echo $berat_Kg[9] ?></td>
            <td><?php echo $berat_gram[9] ?></td>
            <td><?php echo $berat_mg[9] ?></td>
            <td><?php echo $berat_L[9] ?></td>
            <td class="$kosong"><?php echo $stokBarang[9] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[10] ?></td>
            <td><?php echo $berat_Kg[10] ?></td>
            <td><?php echo $berat_gram[10] ?></td>
            <td><?php echo $berat_mg[10] ?></td>
            <td><?php echo $berat_L[10] ?></td>
            <td class="$kosong"><?php echo $stokBarang[10] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[11] ?></td>
            <td><?php echo $berat_Kg[11] ?></td>
            <td><?php echo $berat_gram[11] ?></td>
            <td><?php echo $berat_mg[11] ?></td>
            <td><?php echo $berat_L[11] ?></td>
            <td class="$kosong"><?php echo $stokBarang[11] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[12] ?></td>
            <td><?php echo $berat_Kg[12] ?></td>
            <td><?php echo $berat_gram[12] ?></td>
            <td><?php echo $berat_mg[12] ?></td>
            <td><?php echo $berat_L[12] ?></td>
            <td class="$kosong"><?php echo $stokBarang[12] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[13] ?></td>
            <td><?php echo $berat_Kg[13] ?></td>
            <td><?php echo $berat_gram[13] ?></td>
            <td><?php echo $berat_mg[13] ?></td>
            <td><?php echo $berat_L[13] ?></td>
            <!-- <td class="$kosong"><?php echo $stokBarang[13] ?></td> -->
            <td style="background-color: red; color:white"><?php echo $stokBarang[5] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[14] ?></td>
            <td><?php echo $berat_Kg[14] ?></td>
            <td><?php echo $berat_gram[14] ?></td>
            <td><?php echo $berat_mg[14] ?></td>
            <td><?php echo $berat_L[14] ?></td>
            <td class="$kosong"><?php echo $stokBarang[14] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[15] ?></td>
            <td><?php echo $berat_Kg[15] ?></td>
            <td><?php echo $berat_gram[15] ?></td>
            <td><?php echo $berat_mg[15] ?></td>
            <td><?php echo $berat_L[15] ?></td>
            <td class="$kosong"><?php echo $stokBarang[15] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[16] ?></td>
            <td><?php echo $berat_Kg[16] ?></td>
            <td><?php echo $berat_gram[16] ?></td>
            <td><?php echo $berat_mg[16] ?></td>
            <td><?php echo number_format($berat_L[16], 2) ?></td>
            <td class="$kosong"><?php echo $stokBarang[16] ?></td>
          </tr>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $namaBarang[17] ?></td>
            <td><?php echo $berat_Kg[17] ?></td>
            <td><?php echo $berat_gram[17] ?></td>
            <td><?php echo $berat_mg[17] ?></td>
            <td><?php echo number_format($berat_L[17], 2) ?></td>
            <td class="$kosong"><?php echo $stokBarang[17] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="footer">

  </div>
</body>

</html>