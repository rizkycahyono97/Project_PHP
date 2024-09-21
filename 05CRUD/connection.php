<?php 

//Script untuk connect ke mysql 
  try {
    $conn = mysqli_connect("localhost", "root", "root", "kepegawaian");
  } catch (Exception $e) {
    echo "Gagal connect ke database: " . $e->getMessage();  // getMessage untuk print pesan error
  }

?>