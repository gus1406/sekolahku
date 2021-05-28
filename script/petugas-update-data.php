<?php

include 'koneksi.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tel = $_POST['no_tel'];
$username = $_POST['username'];
$password = $_POST['password'];

// jika form pada password kosong, maka password tidak akan di replace
if ($password == "") {
	$sql = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama', alamat_petugas='$alamat', telepon_petugas='$no_tel', username='$username' WHERE NIP='$nip' ");
} else {
	$sql = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama', alamat_petugas='$alamat', telepon_petugas='$no_tel', username='$username', password=md5('$password') WHERE NIP='$nip' ");
}

if ($sql) {
	header("location:../form-petugas.php?type=edit&nip=$nip&edit=berhasil");
} else {
	header("location:../form-petugas.php?type=edit&nip=$nip&edit=gagal");
}

?>