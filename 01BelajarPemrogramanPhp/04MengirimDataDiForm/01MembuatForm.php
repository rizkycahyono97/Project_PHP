<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="proses.php" method="post" enctype="multipart/form-data">
    Nama: <input type="text" name="name" required maxlength="50">
    <br>
    Alamat: <input type="text" name="alamat" required maxlength="100">
    <br>
    Text Area: <textarea name="textArea" rows="8" cols="50" required></textarea>
    <br>
    Password: <input type="password" name="password" required minlength="8">
    <br>
    Date: <input type="date" name="tanggal" required>
    <br>
    <input type="button" value="Ini Button" onclick="alert('Hai')">
    <br>
    <input type="submit" value="submit">
    <br>
    <!-- CheckBox -->
    <input type="checkbox" name="skills[]" value="PHP"> PHP
    <input type="checkbox" name="skills[]" value="JS"> JS
    <input type="checkbox" name="skills[]" value="PYTHON"> PYTHON
    <br>
    <!-- Option -->
    <select name="select" required>
      <option value="SI">Sistem Informasi</option>
      <option value="TI">Teknik Informatika</option>
      <option value="MI">Manajemen Informasi</option>
    </select>
    <br>
    <!-- Radio -->
    <input type="radio" name="prodi" value="SI" required> Sistem Informasi
    <input type="radio" name="prodi" value="TI"> Teknik Informatika
    <br>
    <!-- File -->
    Pilih File: <input type="file" name="dokumen" accept=".pdf,.doc,.docx">
  </form>
</body>
</html>
