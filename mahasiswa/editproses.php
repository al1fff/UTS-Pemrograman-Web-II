<?php

  include './config/koneksi.php';

  $id                     = $_POST['id'];
  $nama                   = $_POST['nama'];
  $nim                    = $_POST['nim'];
  $programstudi      = $_POST['program_studi'];

  $query = "UPDATE mahasiswa SET
              nama               = '$nama',
              nim               = '$nim',
              program_studi  = '$programstudi'
              WHERE id = $id";
  
  $result = mysqli_query($koneksi,$query);

  if ($result) {
    header ('location: index.php');
  } else {
    echo "data gagal diubah";
  }


?>