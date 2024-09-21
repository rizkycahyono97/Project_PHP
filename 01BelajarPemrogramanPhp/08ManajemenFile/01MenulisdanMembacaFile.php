<?php 
  $messege = "Selamat datang\n";

  // FILE_APPEND -> untuk menambahkan di file tersebut lagi dan lagi
  $result = file_put_contents("01content.txt", $messege, FILE_APPEND);

  if ($result === false){
    echo "Tidak bisa membut file";
  } else {
    echo "Berhasil";
  }

  // Cara kedua
  // $file = fopen("01content2.txt", "w");
  // if ($file){
  //   fwrite($file, "Selamat Datang");
  //   fclose($file);
  // } else {
  //   echo "Gagal";
  // }

  // UNTUK MEMBACA FILE
  // $isi_file = file_get_contents("01content.txt");
  // echo $isi_file;
?>