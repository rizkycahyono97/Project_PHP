<?php 
if(!empty($_POST['proses'])){
  print_r($_POST);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <!-- Setiap name="", merupakan value array di php, seperti $a=['name'] -->
    Nama: <input type="text" name="name">
    <br><br>
    Alamat: <textarea name="alamat" id="" rows="8" cols="200"></textarea>
    <br><br>
    Program Studi: 
    <select name="program_studi" id="">
    <option value="SI">Sistem Informasi</option>
      <option value="TI">Teknik Informatika</option>
      <option value="MI">Manajemen Informasi</option>
    </select>      
    <br><br>
    <input type="submit" name="proses" value="submit">
  </form>
</body>
</html>