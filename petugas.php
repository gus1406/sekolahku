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
							<p>Petugas</p>
						</div>
						<div class="pi-right">
							<p><a href="#">Dashboard</a> / <span>Petugas</span></p>
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
					<div class="table-container">
						<h3>Data petugas</h3>
						<p>Berikut adalah data petugas yang terdaftar di sekolahku.</p>

						<span style="display: block; margin-bottom: 15px;">
							<a href="form-petugas.html" class="btn btn-medium blue">Data Baru <i class="fas fa-plus"></i></a>

							<span>
								<input type="text" name="search" class="s-input" placeholder="Search...">
								<button type="submit" class="s-button"><i class="fas fa-search"></i></button>
							</span>
						</span>
						
						<div class="table-responsive">
							<table>
								<tr>
									<th>#</th>
									<th>NIP</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Username</th>
									<th>Aksi</th>
								</tr>
								<tr>
									<td>1</td>
									<td>89078768</td>
									<td>Putu Agus Darma Putra Juniarta</td>
									<td>Tegal Baleran</td>
									<td>085737548643</td>
									<td>gus1406</td>
									<td>
										<a href="#" class="edit"><i class="fas fa-pen"></i></a>
										<a href="#" class="del"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>89078768</td>
									<td>Putu Agus Darma Putra Juniarta</td>
									<td>Tegal Baleran</td>
									<td>085737548643</td>
									<td>gus1406</td>
									<td>
										<a href="#" class="edit"><i class="fas fa-pen"></i></a>
										<a href="#" class="del"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
							</table>
						</div>

						<p class="remove-margin">Menampilkan 5 dari 357 data</p>
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