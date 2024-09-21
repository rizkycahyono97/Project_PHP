<?php
  
  $todos = [];    //total array yang disiapkan untuk disimpan
  if (file_exists('todo.txt')){        // kondisi jika file tidak ada, biar tidak error
    $file = file_get_contents('todo.txt');   //1. membaca file todo.txt
    $todos = unserialize($file);   // mengubah format serialize menjadi array
  }

  // 2. Jika ditemukan todo yang dikirim melalui methode POST
  if(isset($_POST['todo'])){
    $data = $_POST['todo']; // 3. mengambil data yang diinput pada form
    $todos[] = [              // $todos[] -> fungsinya supaya tidak menimpa baris sebelumnya 
      'todo' => $data,
      'status' => 0
    ];
  saveData($todos);   
  };

  // 5. untuk menangkap status menjadi 1 ketika checklist
  if (isset($_GET['status'])){
    $todos[$_GET['key']]['status'] = $_GET['status']; // jika kita tekan checkbox tadi, maka akan ketangkap $_GET dan merubah status menjadi 1 di hrefnya tadi
    saveData($todos);
  };

  // 6. menangkap hapus
  if (isset($_GET['hapus'])){
    unset($todos[$_GET['key']]);  // function unset untuk menghapus
    saveData($todos);
  }

  function saveData($todos){
    file_put_contents('todo.txt', serialize($todos));
    header('Location: 03ToDo.php');       // karna ketika reload browser, data yang sebelumnya masih ada, dan akan resend lagi, terus menerus
  }
  
  print_r($todos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TodoList</title>
</head>
<body>
  <h1>ToDo App</h1>

  <form action="" method="POST">
    <label for="">Apa Kegiatanmu hari ini</label>
    <input type="text" name="todo" id=" ">
    <button type="submit">Simpan</button>
  </form>

  <ul>
    <?php foreach ($todos as $key => $value): ?>
    <li>
    <input type="checkbox" name="todo" 
      onclick="window.location.href = '03ToDo.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key;?>'"
    <?php if ($value['status'] == 1) echo 'checked'; ?>> <!-- Menambahkan atribut checked jika status == 1 -->
    <label for="">
      <?php
        if ($value['status'] == 1)
          echo '<del>' . $value["todo"] . '</del>';
        else 
          echo $value['todo'];
      ?>
    </label>
    <a href="03ToDo.php?hapus=1&key=<?php echo $key;?>" onclick="return confirm('Beneran')">hapus</a>
</li>
    <?php endforeach; ?>
    </li>
  </ul>
</body>
</html>