<?php

session_start();

include 'koneksi.php';

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

$sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {

	$data = mysqli_fetch_assoc($sql);

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['hak_akses'] = $data['hak_akses'];
	header("location:../index.php?login=berhasil");

} else {
	header("location:../login.php?login=gagal");
}

?>