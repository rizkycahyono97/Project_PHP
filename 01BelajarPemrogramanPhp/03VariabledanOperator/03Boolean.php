<?php
  $a = true;
  $b = "Rizky";
  var_dump($a, $b); // function untuk menampilkan tipe data

  // operator Boolean true or false
  //   ==	sama dengan	$a == $b	true apabila $a sama dengan $b
  // !=	tidak sama dengan	$a != $b	true apabila $a tidak sama dengan $b
  // <>	tidak sama dengan	$a <>$b	true apabila $a tidak sama dengan $b
  // >	lebih besar dari	$a > $b	true apabila $a lebih besar dari $b
  // <	lebih kecil dari	$a < $b	true apabila $a lebih kecil dari $b
  // >=	lebih besar / sama dengan	$a >= $b	true apabila $a lebih besar / sama dengan $b
  // <=	lebih kecil / sama dengan	$a <= $b	true apabila $a lebih kecil / sama dengan $b
  echo '<br>';
  $c = 10;
  $d = 5;
  $e = $c < $d;
  $f = $c != $d;
  $g = $c == $d;
  $h = $c === $d;
  var_dump($e);
  echo '<br>';
  var_dump($f);
  echo '<br>';
  var_dump($g);
  echo '<br>';
  var_dump($h);
  echo '<br>';

  // Operetor Logika
  //   and	And	$a and $b	true apabila keduanya ($a dan $b) bernilai true
  // or	Or	$a or $b	true apabila salah satu ($a atau $b) bernilai true
  // xor	Xor	$a xor $b	true apabila salah satu saja dari $a atau $b bernilai true, bukan keduanya
  // &&	And	$a && $b	true apabila keduanya ($a dan $b) bernilai true
  // ||	Or	$a || $b	true apabila salah satu ($a atau $b) bernilai true
// !	Not	!$a	true apabila $a bernilai false
  $true = true;
  $false = false;
  $true2 = true;

  var_dump($true && $false);
  var_dump($true || $true);
?>