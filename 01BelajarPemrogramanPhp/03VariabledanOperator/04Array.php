<?php
  $array = array("Sapi", "Ayam", "Kambing");  // penulisan array model 1
  $array2 = ["Rizky", "Cahyono", "Putra"];    // penulisan array model 2
  $array[] = "Macan";   // untuk menambahkan pada index terakhir array
  $array2[1] = "Imel";  // untuk menabahkan pada index tertentu
  $array[0] = "Kerbau"; // untuk mengganti indek array
  echo $array[0];
  echo "<br>";
  var_dump($array);
  echo "<br>";
  var_dump($array2);
  echo "<br>";
  echo $array[10] ?? "Tidak ada Array"; // jika ada maka tampilkan. jika tidak ada tampilkan string tersebut
?>