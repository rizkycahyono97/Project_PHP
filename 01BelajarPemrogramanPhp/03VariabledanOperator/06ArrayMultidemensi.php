<?php
  $array = [250, true, ["Rizky", "Imel", "Intan"]];
  // var_dump($array);   // ctrl+u di browser, untuk melihat tree arraynya
  echo $array[2][2] . "<br>";  // untuk memanggil nested array (array multidimensi)

  // Case 1 array multidimensi
  $herbivora = ["Kambing", "Sapi", "Kerbau"];
  $karnivora = ["Harimau", "Singa", "Serigala"];
  $omnivora = ["Ayam", "Monyet", "Babi"];

  // dengan menggunakan array assosiatif
  $binatang = [
    "herbivora" => $herbivora,
    "karnivora" => $karnivora,
    "omnivora" => $omnivora
  ];
  echo $binatang["herbivora"][1] . "<br>";

  // CASE 2 loop pada array multidimensi
  $mahsiswa = [
    ["Marima", 20, "Wanita"],
    ["Soledad", 25, "Wanita"],
    ["Alfonso", 30, "Pria"]
  ];
  
  for ($baris = 0; $baris < 3; $baris++) {
    echo "<p><b>Baris No: $baris</b></p>";
    echo "<u>";
      for($kolom = 0; $kolom < 3; $kolom++) {
        echo "<li?>" . $mahsiswa[$baris][$kolom] . "</li>";
      }  
    echo "</li>";
  };
?>