<?php

// memulai sesi
session_start();

// mendapatkan nama file dan menghapus extensi file dengan subtsr
$file_name = substr(basename($_SERVER['PHP_SELF']),0,-4);

// file koneksi ke database
include 'script/koneksi.php';

/*
 * cek apakah pengguna berada di halaman login
 * jika tidak maka kode pengecekan session akan berjalan
 * kode pengecekan pengguna berada di halaman login atau tidak, agar mencegah terjadinya error ERR_TOO_MANY_REDIRECT
 * karena file login menggunakan file header yang sama, dan jika pengguna tidak login, maka akan terjadi pengalihan halaman secara berulang
 */
if ($file_name !== "login") {
	if (isset($_SESSION['status'])) {
		// pengguna sudah login, tidak di alihkan ke halaman login
	} else {
		header("location:login.php");
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--main style-->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<!--csslibs-->
	<link rel="stylesheet" href="assets/css/csslibs.css" type="text/css">
	<!--font-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

	<title>Sekolahku</title>
</head>
<body>

<?php
/*
 * jika berada di halaman login maka navbar tidak ditampilkan
 */
if ($file_name == "login") {  } else { 
?>
<header>
	<nav class="nav">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="nav-nav">
						<div class="nav-title">
							<h1>
								<a href="index.php">Sekolahku</a>
								<span class="menu-toggle menu-open" id="OpenMenu" onclick="OpenMenu()"><i class="fas fa-bars"></i></span>
								<span class="menu-toggle menu-close" id="CloseMenu" onclick="CloseMenu()"><i class="fas fa-times"></i></span>
							</h1>
						</div>
						<div class="nav-menu" id="NavMenu">
							<a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
							<a href="pendaftaran.php"><i class="fas fa-user-friends"></i> Pendaftaran</a>
							<a href="petugas.php"><i class="fas fa-users-cog"></i> Petugas</a>
						</div>
						<div class="nav-admin-name">
							<p>
								<?php
								if (isset($_SESSION['username'])) {
									$username = $_SESSION['username'];
									echo "<span>Hallo, $username</span>";
								}
								?>
								<a href="script/logout-script.php" onclick="return confirm('Anda ingin keluar?')">Logout <i class="fas fa-sign-out-alt"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
<?php } ?>