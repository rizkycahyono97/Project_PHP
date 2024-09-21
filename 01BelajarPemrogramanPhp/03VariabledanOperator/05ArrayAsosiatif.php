<?php

  // mengisi indek array dengan custom String / assosiatif array
  // Penulisan pertama
  $datadiri["nama"] = "Rizky Cahyono Putra";
  $datadiri["kelas"] = "TI A2";
  $datadiri["alamat"] = "Lamongan";

  // penulisan 2
  $datadiri2 = [
    "nama" => "Rizky Cahyono Putra", // nama harus diisi dengan rizky cahyono putra
    "kelas" => "TI A2",
    "alamat" => "Lamongan"
  ];

  echo "Nama saya adalah: " . $datadiri["nama"] . "<br>";
  echo "Kelas: " . $datadiri["kelas"] . "<br>";
  echo "Alamat: " . $datadiri["alamat"] . "<br>";
  echo "Nama saya: " . $datadiri2["nama"] . ", Kelas: " . $datadiri2["kelas"] . ", Alamat: " . $datadiri2["alamat"] . "<br>";

  // perulangan pada array assosiatif
  $alamat = [
    "naufal" => "Bandung",
    "meilan" => "Malang",
    "marimar" => "Lamongan"
  ];

  foreach($alamat as $i => $value) {
    echo "Alamat " . $i . " di " . $value;
    echo "<br>";
  }
?>