<?php 
// script untuk menampilakan keterangan lengkap ketika diklik
include("connection.php");

$id = $_GET["id"];
$sql = "SELECT * FROM pegawai WHERE id = $id";
$result = mysqli_query($conn, $sql);
$pegawai = mysqli_fetch_assoc($result);

// echo "<pre>";
// print_r($pegawai);
?>

<html>
<body>
  <h3><?=$pegawai["nama"]?></h3>

  <label for="">Jenis Kelamin: </label>
  <label for=""><?=$pegawai["jenis_kelamin"] ?></label>
  <br>

  <label for="">alamat: </label>
  <label for=""><?=$pegawai["alamat"]?></label>
  <br>

  <label for="">Tempat Lahir: </label>
  <label for=""><?=$pegawai["tempat_lahir"]?></label>
  <br>

  <label for="">Tanggal Lahir</label>
  <label for=""><?=date("d M yy", strtotime($pegawai["tanggal_lahir"]))?></label>
  <br>

  <label for="">Nomor Hp: </label>
  <label for=""><?=$pegawai["nomor_hp"]?></label>
  <br>
  <br>

  <a href="list.php">Kembali</a>

</body>
</html>