<?php 

  // CASE 1
  // Variable nama diluar skup
  // $nama = "Meilan";
  // function tulisPesan(){
  //   echo "Halo $nama, apa kabarmu hari ini ?";
  // }
  // tulisPesan($nama);

  // CASE 2
  // menggunakan variable global (tapi tidak dianjurkan)
  $nama = "Meilan";
  function nama(){
    global $nama;
    echo "Selamat Datang $nama";
  }

  nama($nama);
?>