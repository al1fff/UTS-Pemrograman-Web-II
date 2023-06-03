<?php

  include './config/koneksi.php';

  $nama               = $_POST['nama'];
  $kode_matakuliah               = $_POST['kode_matakuliah'];
  $deskripsi  = $_POST['deskripsi'];

  $query = "INSERT INTO matakuliah (nama,kode_matakuliah,deskripsi) VALUES ('$nama','$kode_matakuliah','$deskripsi')";

  $result = mysqli_query($koneksi,$query);
  
  if ($result) {
    header('location: index.php');
  } else {
    echo "data gagal ditambahkan";
  }

?>