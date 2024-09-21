<?php 
  $warna = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'oranye', 'ungu', 
            'biru', 'kuning', 'merah', 'hijau', 'oranye', 'ungu', 'merah'];

  $jumlah_merah = 0;  // untuk menghitung angka merahnya
  for ($i=0; $i<=14; $i++) {    // 14 -> jumlah array $warna
    // kondisi
    if($warna[$i] == 'kuning') {
      $jumlah_merah++;
    }
  }
  echo "Jumlah warna merah ada: $jumlah_merah";

  // Jika tidak memakai perulangan
  // if($warna[0] == 'merah'){
  //   $jumlah_merah++;
  // } 
  // if($warna[1] == 'merah'){
  //   $jumlah_merah++;
  // } 
  // if($warna[2] == 'merah'){
  //   $jumlah_merah++;
  // }
  // if($warna[3] == 'merah'){
  //   $jumlah_merah++;
  // } 
  // if($warna[4] == 'merah'){
  //   $jumlah_merah++;
  // }  
?>