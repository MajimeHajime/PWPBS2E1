<?php
  include 'lib/library.php';

  cekLogin();

  $sql = 'SELECT * FROM siswa INNER JOIN kelas ON (siswa.kelas = kelas.id_kelas)';
  
  $listSiswa = $mysqli ->query($sql);

  include 'views/v_index.php';
?>
