<?php
  session_start();

  function base_url(){
    return "http://localhost/PWPBS2E1";
  }

  function flash($tipe, $pesan = ''){
    if (empty($pesan))  {
      $pesan = @$_SESSION[$tipe];
      unset($_SESSION[$tipe]);
      return $pesan;
    } else {
      $_SESSION[$tipe] = $pesan;
    }
  }

  function cekLogin() {
    $username = @$_SESSION['username'];
    $level    = @$_SESSION['level'];

    if (empty($username) AND empty($level)) {
      header("location:login.php");
    }
  }

  function sudahLogin() {
    $username = @$_SESSION['username'];
    $level    = @$_SESSION['level'];

    if (!empty($username) AND !empty($level)) {
      header("location:index.php");
    }
  }
?>
