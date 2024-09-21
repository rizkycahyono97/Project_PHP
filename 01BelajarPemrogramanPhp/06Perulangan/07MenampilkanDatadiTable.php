<?php 
  $siswa = [
    ['nama' => 'toni', 'kelas' => '2A', 'goldarah' => 'B'],
    ['nama' => 'kresna', 'kelas' => '2A', 'goldarah' => 'AB'],
    ['nama' => 'palupi', 'kelas' => '2B', 'goldarah' => 'B'],
    ['nama' => 'singgih', 'kelas' => '2C', 'goldarah' => 'A'],
    ['nama' => 'oriza', 'kelas' => '2B', 'goldarah' => 'O'],
    ['nama' => 'hani', 'kelas' => '2D', 'goldarah' => 'B'],    
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Gol. Darah</th>
    </tr>

    <!-- Menggunakan php untuk menampilkan perulangan array di table -->
    <!-- : titikdua samadengan kurung kurawal -->
    <?php foreach ($siswa as $key => $value): ?>
    <tr>
      <td> <?php echo $value['nama'] ?></td>
      <td> <?php echo $value['kelas'] ?></td>
      <td> <?php echo $value['goldarah'] ?></td>
    </tr>
    <?php endforeach ?> 
    <!-- penutupnya juga kita kasih tag php -->
  </table>
</body>
</html>