<?php

// Untuk menampilkan data dalam bentuk array
  include("connection.php");

  if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM pegawai LIMIT 10";
  $result = mysqli_query($conn, $sql);

  // Mengubah hasil query menjadi array asosiatif dengan mysqli_fetch_assoc
  $output = [];
  while ($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
  } 

  // Untuk mengeprint supaya menjadi array multidimensi
  // echo "<pre>";
  // print_r($output);

  // <?= adalah bentuk singkat dari <?php echo
?>

<html>
  <body>
    <!-- Jika diklik akan tampil id dan keterangan lengkap -->
    <h1>List Data</h1>
    <br>
    <a href="add.php">Tambah Data</a>

    <table border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <?php foreach($output as $index => $pegawai) : ?>
        <tr>
          <td><?php echo $index + 1 ?></td>
          <td><a href="profile.php?id=<?=$pegawai["id"]?>"><?php echo $pegawai["nama"] ?></td>
          <td><?php echo $pegawai["jenis_kelamin"] ?></td>
          <td><?php echo $pegawai["alamat"] ?></td>
          <td><a href="edit.php?id=<?=$pegawai["id"]?>">Edit</a></td>
        </tr>
      <?php endforeach ?>
    </table>
  </body>
</html>
