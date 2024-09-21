<?php

  $pesan = null;

  $dataDiri = [
    'nama' => "Rizky",
    'alamat' => "Lamongan",
    'kelas' => null
  ];

  echo $dataDiri['nama'] . "<br>";
  echo $dataDiri['pesan'] ?? "Tidak ada Array <br>"; // Operator 
  echo $dataDiri['prodi'] ?? null;

?>