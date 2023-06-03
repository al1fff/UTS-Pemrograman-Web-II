<?php

  include './config/koneksi.php';

  $id                     = $_POST['id'];
  $nama                   = $_POST['nama'];
  $kode_matakuliah                    = $_POST['kode_matakuliah'];
  $deskripsi      = $_POST['deskripsi'];

  $query = "UPDATE matakuliah SET
              nama               = '$nama',
              kode_matakuliah               = '$kode_matakuliah',
              deskripsi  = '$deskripsi'
              WHERE id = $id";
  
  $result = mysqli_query($koneksi,$query);

  if ($result) {
    header ('location: index.php');
  } else {
    echo "data gagal diubah";
  }


?>