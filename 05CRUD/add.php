<html>
<body>
  <h1>Tambah Data</h1>

  <form action="insert.php" method="POST">
    <label for="">Nama</label>
    <input type="text" name="nama">
    <br><br>

    <label for="">Jenis Kelamin: </label>
    <select name="jenis_kelamin" id="">
      <option value="laki-laki">laki-laki</option>
      <option value="perempuan">perempuan</option>
    </select>
    <br><br>

    <label for="">alamat: </label>
    <textarea name="alamat" id=""></textarea>
    <br><br>

    <label for="">Tempat Lahir: </label>
    <input type="text" name="tempat_lahir">
    <br><br>

    <label for="">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir">
    <br><br>

    <label for="">Nomor Hp: </label>
    <input type="text" name="nomor_hp">
    <br><br>

    <button type="submit">Submit</button>
    <a href="list.php">Back</a>
  </form>
</body>
</html>