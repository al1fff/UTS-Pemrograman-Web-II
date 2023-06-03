<?php

  include './config/koneksi.php';

  $nama               = $_POST['nama'];
  $nim               = $_POST['nim'];
  $program_studi  = $_POST['program_studi'];

  $query = "INSERT INTO mahasiswa (nama,nim,program_studi) VALUES ('$nama','$nim','$program_studi')";

  $result = mysqli_query($koneksi,$query);
  
  if ($result) {
    header('location: index.php');
  } else {
    echo "data gagal ditambahkan";
  }

?>