<?php 
  // dia akan mengulang sampai kondisi berupa false 1 <= 10
  for ($i=1; $i <= 10; $i++) { 
    echo "$i Perulangan" . '<br>';
  }

  echo '<br>';

  // jika perulangan kebalik maka diganti lebih dari, bukan kurang dari
  for ($i=10; $i >= 1; $i--) { 
    echo "$i perulangan kebalik <br>";
  };

  echo '<br>';
  
  // untuk incrementnya/loncatnya 2 kali
  for ($i=1; $i <= 10; $i+=2) { 
    echo "$i Perulangan" . '<br>';
  }
?>