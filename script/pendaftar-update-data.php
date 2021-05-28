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

$sql = mysqli_query($koneksi, "UPDATE pendaftar SET nama='$nama', jenis_kelamin='$jk', tgl_lahir='$tgl_lahir', agama='$agama', alamat='$alamat', no_telepon='$no_tel', email='$email', sekolah_asal='$sekolah_asal' WHERE NISN='$nisn' ");

if ($sql) {
	header("location:../form-pendaftaran.php?type=edit&nisn=$nisn&edit=berhasil");
} else {
	header("location:../form-pendaftaran.php?type=edit&nisn=$nisn&edit=gagal");
}

?>