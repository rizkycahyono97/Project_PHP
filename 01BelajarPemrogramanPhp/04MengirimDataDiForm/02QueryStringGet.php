<?php
   
  // UNTUK SECURE CODINGNYA
  $nama = isset($_GET['nama']) ? htmlspecialchars($_GET['nama'], ENT_QUOTES, 'UTF-8') : '';
  $alamat = isset($_GET['alamat']) ? htmlspecialchars($_GET['alamat'], ENT_QUOTES, 'UTF-8') : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Selamat Datang, <?php echo $nama; ?></h1>
  <p>Anda TInggal di <?php echo $alamat ?></p>
  <p>Selamat Belajar pemrograman dasar PHP</p>

  <!-- Membuat Form supaya otomatis -->
   <form action="">
    <input type="text" name="name" placeholder="Masukan Nama">
    <input type="text" name="alamat" placeholder="Masukan Alamat">
    <input type="submit" value="submit"> 
   </form>
</body>
</html> 