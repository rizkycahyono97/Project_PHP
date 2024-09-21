<?php 
  function cetakPesan($nama){
    echo "Selamat Datang, $nama";
  }

  cetakPesan('Rizky');
  echo '<br>';

  // jika paramaternya tidak dimasukan maka akan error, cara mengatasinya 
  // null bisa diganti string biasa
  function error($kelas = null){
    echo "kelas: $kelas";
  }

  error();
  echo '<br>';

  // Case 1
  // jika parameter tidak dimasukan maka cetak selamat datang,
  // jika dimasukan maka cetak selamat datang $namaLengkap
  function selamat($namaLengkap = null){
    if (empty($namaLengkap)){
      echo "Selamat Datang";
    } else {
      echo "Selamat Datang, $namaLengkap";
    }
  };
  
  selamat();
?>