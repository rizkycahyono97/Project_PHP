<?php
  // menggunakan array mutidimensi dengan metode array asosiatif
  $siswa = [
    ["nama" => "toni", 'kelas' => '2A'],
    ['nama' => 'kresna', 'kelas' => '2A'],
    ['nama' => 'palupi', 'kelas' => '2B'],
    ['nama' => 'singgih', 'kelas' => '2C'],
    ['nama' => 'oriza', 'kelas' => '2b'],
    ['nama' => 'hani', 'kelas' => '2D'],
  ];
  
  // Cara baca: jika value dari array 'nama' == '2B', maka lewati jangan dieksekusi
  foreach ($siswa as $key => $value) {
    if ($value['kelas'] == '2B')
      continue;

    echo "Nama: " . $value['nama'] . '<br>';
    echo "Kelas: " . $value['kelas'] . '<br> <br>';
  };

  echo '<br>' . '<br>';

  // CONTOH 2
  $warna = ['merah', 'hijau', 'biru', 'merah', 'kuning', 'kuning', 'putih'];
  foreach ($warna as $key => $value) {
    if ($value == 'hijau') {
      continue;
    }
  echo "Warna: $value" . '<br>'; 
  }
  ?>