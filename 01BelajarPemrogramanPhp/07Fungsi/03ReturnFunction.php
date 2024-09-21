<?php 
  $alas = 10;
  $tinggi = 15;

  function luasSegitiga($alas, $tinggi){
    $luas = $alas * $tinggi / 2;
    return $luas;
  }

  function luasJajarGenjang($alas, $tinggi){
    $luas = ($alas + $tinggi) * 2;
    return $luas;
  }

  $hasilJajarGenjang = luasJajarGenjang(20, 25);

  echo luasSegitiga($alas, $tinggi);
  echo '<br>';
  echo $hasilJajarGenjang;
?>