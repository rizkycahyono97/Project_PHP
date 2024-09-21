<?php
  $nama = "Rizky";
  $pesan = "Selamat Datang, $nama <br>";  
  $pesan2 = 'Selamat Datang, $nama <br>';    // variable nama tidak akan dieksekusi
  $pesan3 = "Selamat Datang, ";
  $pesan4 = "Selamar Datang";

  echo $pesan;
  echo $pesan2;
  // konkatenasi
  echo $pesan3 . $nama . '<br>';
  echo $pesan4 . ', ' . $nama;
?>