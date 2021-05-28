<?php

include 'koneksi.php';

$nisn = $_GET['nisn'];

$sql = mysqli_query($koneksi, "UPDATE pendaftar SET keterangan='lolos' WHERE NISN='$nisn' ");

header("location:../pendaftaran.php?konfirmasi-lolos=berhasil");

?>