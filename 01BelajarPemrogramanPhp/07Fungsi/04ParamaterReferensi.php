<?php 

  // tanda untuk variable reference &
  function gantinama(&$nama){
    $nama = "Nama baru";
  }

  $nama = "Toni";
  gantinama($nama);
  echo $nama; // akan mereferensikan dari function gantinama, bukan di variable nama

  echo '<br>';

  // CASE 2
  function kaliLipat(&$angka){
    $angka = $angka * 2;
  }

  $x = 5;
  echo $x . '<br>';
  kaliLipat($x);
  echo $x . '<br>';
  kaliLipat($x);
  echo $x . '<br>';
  kaliLipat($x);
  echo $x . '<br>';
  kaliLipat($x);

?>