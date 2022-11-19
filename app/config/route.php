<?php

$view = isset($_GET['view']) ? $_GET['view'] : 'dashboard';

switch ($view) {
  case 'mahasiswa':
    include "../my_app/app/view/mahasiswa/index.php";
    break;
  case 'tambah_mahasiswa':
    include "../my_app/app/view/mahasiswa/tambah.php";
    break;
  case 'user':
    include "../my_app/app/view/user/index.php";
    break;
  case 'tambah_user':
    include "../my_app/app/view/user/tambah.php";
    break;
  default:
    echo "Halaman tidak ditemukan!";
    break;
}
