<?php 
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES, 'UTF-8');
  } else {
    header("Location: 03proses2.php");
    exit();
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
  Selamat Datang <?php echo $nama; ?><br>
  Alamat Kamu: <?php echo$alamat; ?>
</body>
</html>