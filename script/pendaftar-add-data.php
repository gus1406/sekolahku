<?php

include 'koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_tel = $_POST['no_tel'];
$email = $_POST['email'];
$sekolah_asal = $_POST['sekolah_asal'];
$tgl_mendaftar = date("d-m-Y");


$sql = mysqli_query($koneksi, "INSERT INTO pendaftar (NISN, nama, jenis_kelamin, tgl_lahir, agama, alamat, no_telepon, email, sekolah_asal, tgl_mendaftar, keterangan) VALUES ('$nisn', '$nama', '$jk', '$tgl_lahir', '$agama', '$alamat', '$no_tel', '$email', '$sekolah_asal', '$tgl_mendaftar', 'pending') ");

if ($sql) {
	header("location:../form-pendaftaran.php?type=add&add=berhasil");
} else {
	header("location:../form-pendaftaran.php?type=add&add=gagal");
}

?>