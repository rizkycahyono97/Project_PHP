<?php 
  $kru = ['toni', 'rizky', 'cahyono', 'imel', 'intan', 'willy', 'hapis',
          'sapri', 'markeso', 'ugik', 'galang', 'malikus', 'protus'];
  $jumlah = 0;

  foreach ($kru as $key => $nama) {
    $keyone = $key + 1;   // jika ingin index dimulai dengan 1
    echo "Nama: $nama <br>";
    if ($nama == 'cahyono') {
      echo "Cahyono ada di nomor: $keyone";
      break;
    }
  }
?>