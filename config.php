<?php
//koneksi ke database MySQL,
$koneksi = mysqli_connect("localhost","root","","linverse");

//cek jika koneksi ke MySQL gagal, maka akan tampil pesan berikut

if (mysqli_connect_errno()){
  echo "MySQL connection failed: " . mysqli_connect_error();
}

?>
