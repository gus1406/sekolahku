<?php

include 'koneksi.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tel = $_POST['no_tel'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "INSERT INTO petugas (NIP, nama_petugas, alamat_petugas, telepon_petugas, username, password, hak_akses) VALUES ('$nip', '$nama', '$alamat', '$no_tel', '$username', md5('$password'), 'petugas') ");

if ($sql) {
	header("location:../form-petugas.php?type=add&add=berhasil");
} else {
	header("location:../form-petugas.php?type=add&add=gagal");
}

?>