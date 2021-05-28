<?php

include 'koneksi.php';

$nip = $_GET['nip'];

if ($nip == "") {
	header("location:../petugas.php?status=invalid");
}

$sql = mysqli_query($koneksi, "DELETE FROM petugas WHERE NIP='$nip' ");

if ($sql) {
	header("location:../petugas.php?del=berhasil");
} else {
	header("location:../petugas.php?del=gagal");
}

?>