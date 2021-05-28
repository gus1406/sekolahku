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

	<title>Pendaftaran - Sekolahku</title>
</head>
<body>

<header>
	<nav class="nav">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="nav-nav">
						<div class="nav-title">
							<h1>
								<a href="#">Sekolahku</a>
								<span class="menu-toggle menu-open" id="OpenMenu" onclick="OpenMenu()"><i class="fas fa-bars"></i></span>
								<span class="menu-toggle menu-close" id="CloseMenu" onclick="CloseMenu()"><i class="fas fa-times"></i></span>
							</h1>
						</div>
						<div class="nav-menu" id="NavMenu">
							<a href="index.html"><i class="fas fa-home"></i> Dashboard</a>
							<a href="pendaftaran.html"><i class="fas fa-user-friends"></i> Pendaftaran</a>
							<a href="petugas.html"><i class="fas fa-users-cog"></i> Petugas</a>
						</div>
						<div class="nav-admin-name">
							<p><span>Hallo, Agus Darma</span> <a href="#">Logout <i class="fas fa-sign-out-alt"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>

<main>
	<section class="page-inf">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="pi">
						<div class="pi-left">
							<p>Form Pendaftaran</p>
						</div>
						<div class="pi-right">
							<p><a href="#">Dashboard</a> / <span>Form Pendaftaran</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="form-container">
						<h3>Form pendaftaran</h3>
						<p>Input data pendaftaran calon siswa baru.</p>

						<div class="form-group">
							<label for="nisn">NISN <small>(Nomor Induk Siswa Nasional)</small></label>
							<input type="number" name="nisn" class="w-30" placeholder="*2002140601">
						</div>

						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" name="nama" class="w-100" placeholder="*Arista Budi Laksmana">
						</div>

						<div class="form-group">
							<label for="jk">Jenis Kelamin</label>
							<select name="jk" class="w-30">
								<option value="">-- Pilih --</option>
								<option value="Laki - Laki">Laki - Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>

						<div class="form-group">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="w-100" placeholder="*14/06/2002">
						</div>

						<div class="form-group">
							<label for="agama">Agama</label>
							<input type="text" name="agama" class="w-30" placeholder="*Hindu">
						</div>

						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" class="w-100" placeholder="*Jl Kenanga Gng xx No xx">
						</div>

						<div class="form-group">
							<label for="no_tel">No Telepon</label>
							<input type="number" name="no_tel" class="w-30" placeholder="085737xxxxxx">
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="w-50" placeholder="*budilaksmana@gmail.com">
						</div>

						<div class="form-group">
							<label for="sekolah_asal">Sekolah Asal</label>
							<input type="text" name="sekolah_asal" class="w-50" placeholder="*Smp 1 (daerah)">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-medium blue">Simpan Data <i class="fas fa-save"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<footer>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>2021 © Sekolahku</p>
				</div>
			</div>
		</div>
	</div>
</footer>		
	
<!--Main javascript-->
<script src="assets/js/js.js" type="text/javascript"></script>

</body>
</html>