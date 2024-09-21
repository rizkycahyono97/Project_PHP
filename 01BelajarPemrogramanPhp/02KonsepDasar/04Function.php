<?php

$name = ucwords("rizky cahyono putra"); // functon membuat huruf pertama kapital
$name2 = strtoupper("Bulan Sitena");    // Function untuk uppercase;

// membuat function sendiri
function pesan() {
  echo "Selamat Datang RIzky";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Selamat Datang, <?php echo $name, $name2, pesan();?></h1>
</body>
</html>