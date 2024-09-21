<?php 
  $nilai = 80;
  $wawancara = 'B';

  // jika if/kondisi pertama terpenuhi, maka lanjut ke if/kondisi(yang didalam if pertama) yang kedua, baru ke else
  if ($nilai >= 80) {
    echo "Anda lulus." . '<br>';
    if ($wawancara == 'A') {
      echo "Wawancara anda sangat memuaskan";
    } elseif ($wawancara == 'B') {
      echo "Wawancara anda memuaskan";
    } else {
      echo "Wawancara anda kurang memuaskan";
    }
  } else {
    echo 'Anda Tidak lulus'; 
  }

  echo '<br>' . '<br>';

  // Contoh 2
  $psikotes = 85;
  $wawancara2 = 'lulus';
  $kesehatan = 'tidak';
  if ($psikotes >= 80) {
    echo 'Anda lulu Psikotes.' . '<br>';
    if ($wawancara2 == 'lulus') {
      echo "Selamat anda lulus wawancara" . '<br>';
      if ($kesehatan == 'lulus') {
        echo "Selamat anda lulusu kesehatan" . '<br>';
      } else {
        echo "Anda tidak lulus kesehatan";
      }
    } else {
      echo 'Anda tidak lulus wawancara' . '<br>';
    }
  } else {
    echo "Anda tidak lulus Psikotes";
  }

?>