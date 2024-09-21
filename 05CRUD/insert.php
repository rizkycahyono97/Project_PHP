<?php 
include("connection.php");

// echo "<pre>";
// print_r($_POST);

$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomor_hp = $_POST["nomor_hp"];

try {
  $sql = 
    "
    INSERT INTO pegawai 
    (nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, nomor_hp)
    VALUES
    ('$nama', '$jenis_kelamin', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$nomor_hp') 
    "; // harus dikasih petik, karena bersifat String

    $result = mysqli_query($conn, $sql);
    header("Location:list.php"); // untuk redirection 
} catch (Exception $e){
  echo "Gagal Insert ke database: " . $e->getMessage();
}

?>