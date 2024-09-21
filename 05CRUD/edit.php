<?php 
include("connection.php");

$id = $_GET["id"];
$sql = "SELECT * FROM pegawai WHERE id = $id";
$result = mysqli_query($conn, $sql);
$pegawai = mysqli_fetch_assoc($result);
?>

<html>
<body>
  <h1>Edit Data</h1>

  <form action="edit.php.php" method="GET">
    <input type="hidden" value="<?=$pegawai["id"]?>">

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?=$pegawai["nama"]?>">
    <br><br>

    <label for="">Jenis Kelamin: </label>
    <select name="jenis_kelamin" id="">
      <option value="laki-laki" <?php if($pegawai["jenis_kelamin"] == "Male") echo "selected"?>>laki-laki</option>  <!-- jika laki-laki maka selected laki-laki -->
      <option value="perempuan" <?php if($pegawai["jenis_kelamin"] == "Female") echo "selected"?>>perempuan</option>
    </select>
    <br><br>

    <label for="">alamat: </label>
    <textarea name="alamat" id=""><?=$pegawai["alamat"]?></textarea>
    <br><br>

    <label for="">Tempat Lahir: </label>
    <input type="text" name="tempat_lahir" value="<?=$pegawai["tempat_lahir"]?>">
    <br><br>

    <label for="">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" value="<?=$pegawai["tanggal_lahir"]?>">
    <br><br>

    <label for="">Nomor Hp: </label>
    <input type="text" name="nomor_hp" value="<?=$pegawai["nomor_hp"]?>">
    <br><br>

    <button type="submit">Ubah </button>
    <a href="list.php">Back</a>
  </form>
</body>
</html>