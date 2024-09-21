<?php 
  $warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'oranye', 'ungu', 
          'biru', 'kuning', 'merah', 'hijau', 'oranye', 'ungu', 'merah'];

  $jumlah_merah = 0;
  $i = 0;   // inisialisasi varible looping while
  $x = 1;

  // WHILE
  // BACA: selama variable i kurang dari samadengan 14, maka jalankan kondisi if
  //        jika sudah samadengan 14 maka berhenti
  while ($i <= 14) {
    if ($warna[$i] == 'merah') {
    $jumlah_merah++;
    }
  $i++;
  }
  echo "Variable dengan warna merah ada: $jumlah_merah <br>";

  // DO WHILE
  do {
    echo "Looping menggunakan do while: $x <br>";
    $x++;
  } while ($x <= 15);
?>