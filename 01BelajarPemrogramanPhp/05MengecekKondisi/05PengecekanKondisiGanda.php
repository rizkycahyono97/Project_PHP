<?php 
  $warna = 'Merah';
  $ukuran = 'L';
  $biaya = 80000;
  $biaya_tambahan = 15000;

  // Pengecekan untuk warna merah DAN ukuran XL, dikenakan biaya tambahan
  if ($warna == "Merah" && $ukuran == "XL") {
    echo "Total Harga: " . $biaya + $biaya_tambahan; 
  } else {
    echo "Total Harga: " . $biaya;
  }

  echo '<br>';

  // pengecekakn untuk ukuran XL ATAU warna kain merah, dikenakan biaya tambahan
  if ($warna == "Merah" || $ukuran == "XL") {
    echo "Total Harga: " . $biaya + $biaya_tambahan; 
  } else {
    echo "Total Harga: " . $biaya;
  }
?>