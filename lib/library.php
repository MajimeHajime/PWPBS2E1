<?php
  include'lib/helper.php';

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'login';

  $mysqli = mysqli_connect($host, $user, $pass, $db) or die('Tidak dapat Koneksi ke database');
?>
