<?php 
  $warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'oranye', 'ungu', 
  'biru', 'kuning', 'merah', 'hijau', 'oranye', 'ungu', 'merah'];

  $jumlah_merah = 0;

  // $key -> untuk indexnya, $value -> isi setiap indeknya
  // biasanya untuk perulangan untuk array
  foreach ($warna as $key => $value) {
    echo "Indeks ke-$key berisi nilai $value <br>";
  }

  echo '<br>' . '<br>';

  foreach ($warna as $nomor => $nilai) {
  if ($nilai == 'merah') {
    $jumlah_merah++;
    }
  }
  echo "Jumlah warna merah sebanyak: $jumlah_merah";

?>