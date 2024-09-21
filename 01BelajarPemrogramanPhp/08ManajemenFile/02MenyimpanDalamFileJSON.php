<?php 
  $anggota = [
    ['nama' => 'Toni', 'goldarah' => 'A'],
    ['nama' => 'Bayu', 'goldarah' => 'B'],
    ['nama' => 'Rizky', 'goldarah' => 'AB'],
    ['nama' => 'Imel', 'goldarah' => 'O'],
  ];
  
  // untuk merubah ke dalam format serialize 
  $data = serialize($anggota);
  file_put_contents('02data.txt', $data);
  if ($data == true){
    echo "Berhasil";
  } else {
    echo "Gagal";
  }

  // kita baca lagi
  echo $output = file_get_contents('02data.txt');
  if ($output == false){
    echo "Gagal membaca file";
  };

  // untuk mengubah dari bentuk seriali
  $output = file_get_contents('02data.txt');
  $hasil = unserialize($output);
  print_r($output);


  // Menyimpan dalam bentuk JSON
  $data2 = json_encode($anggota);
  file_put_contents('02data02.txt', $data2);
  $output2 = file_get_contents('02data.txt');
  $hasil2 = json_decode($output2, true);
  print_r($output2);

?>