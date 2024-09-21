<?php 
  $nilai = 'C';

  switch ($nilai) {
    case 'A':
      echo "Nilai anda sangat memuaskan";
      break;
    case 'B':
      echo "Nilai anda memuaskan";
      break;
    case 'C':
      echo "Nilai anda cukup";
      break;
    case 'E': 
      echo "Nilai anda kurang";
      break;
    case 'F':
      echo "Anda Tidak Lulus";
    default:  // Seperti else
      echo "Nilai tidak terdaftar";
      break;
  };
?>