<?php
  include 'lib/library.php';

  cekLogin();

  $sql = 'SELECT * FROM siswa';
  $listSiswa = $mysqli ->query($sql);

  include 'views/v_index.php';
?>
