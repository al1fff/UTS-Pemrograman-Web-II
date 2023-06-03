<?php

  include './config/koneksi.php';

  $nama               = $_POST['nama'];
  $nidn               = $_POST['nidn'];
  $jenjangpendidikan  = $_POST['jenjang_pendidikan'];

  $query = "INSERT INTO dosen (nama,nidn,jenjang_pendidikan) VALUES ('$nama','$nidn','$jenjangpendidikan')";

  $result = mysqli_query($koneksi,$query);
  
  if ($result) {
    header('location: index.php');
  } else {
    echo "data gagal ditambahkan";
  }

?>