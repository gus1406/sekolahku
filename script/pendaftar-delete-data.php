<?php

include 'koneksi.php';

$nisn = $_GET['nisn'];

if ($nisn == "") {
	header("location:../pendaftaran.php?status=invalid");
}

$sql = mysqli_query($koneksi, "DELETE FROM pendaftar WHERE NISN='$nisn' ");

if ($sql) {
	header("location:../pendaftaran.php?del=berhasil");
} else {
	header("location:../pendaftaran.php?del=gagal");
}

?>