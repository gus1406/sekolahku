<?php include 'header.php'; ?>

<main>
	<section class="page-inf">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="pi">
						<div class="pi-left">
							<p>Dashboard</p>
						</div>
						<div class="pi-right">
							<p><a href="index.php">Dashboard</a> / <span>Dashboard</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row-lg">
				<div class="col-3">
					<div class="d-card">
						<?php
							// mendapatkan tgl sekarang
							$tgl_sekarang = date("d-m-Y");
							$sql = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE tgl_mendaftar='$tgl_sekarang' ");
							$jumlah = mysqli_num_rows($sql);
						?>
						<h2><?php echo $jumlah; ?> <i class="fas fa-user"></i></h2>
						<p class="desc">Total calon siswa mendaftar hari ini</p>
						<p class="date">Per tanggal <?php echo $tgl_sekarang; ?></p>
					</div>
				</div>
				<div class="col-3">
					<div class="d-card">
						<?php
							$sql2 = mysqli_query($koneksi, "SELECT * FROM pendaftar");
							$jumlah2 = mysqli_num_rows($sql2);
						?>
						<h2><?php echo $jumlah2; ?> <i class="fas fa-user-friends"></i></h2>
						<p class="desc">Total calon siswa mendaftar</p>
						<p class="date">Per tanggal <?php echo $tgl_sekarang; ?></p>
					</div>
				</div>
				<div class="col-3">
					<div class="d-card">
						<?php
							$sql3 = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE keterangan='lolos' ");
							$jumlah3 = mysqli_num_rows($sql3);
						?>
						<h2><?php echo $jumlah3; ?> <i class="fas fa-graduation-cap"></i></h2>
						<p class="desc">Total calon siswa lolos seleksi</p>
						<p class="date">Per tanggal <?php echo $tgl_sekarang; ?></p>
					</div>
				</div>
				<div class="col-3">
					<div class="d-card">
						<?php
							$sql4 = mysqli_query($koneksi, "SELECT * FROM petugas");
							$jumlah4 = mysqli_num_rows($sql4);
						?>
						<h2><?php echo $jumlah4; ?> <i class="fas fa-users-cog"></i></h2>
						<p class="desc">Total petugas terdaftar</p>
						<p class="date">Per tanggal <?php echo $tgl_sekarang; ?></p>
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
						<h3>Data Pendaftar Terbaru</h3>
						<p>Berikut adalah data calon siswa baru yang mendaftar.</p>
						<div class="table-responsive">
							<table>
								<tr>
									<th>#</th>
									<th>NISN</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Asal Sekolah</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>

								<?php
									$i = 1;

									$sql_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar ORDER BY tgl_mendaftar DESC LIMIT 5 ");
									$jml_data = mysqli_num_rows($sql_pendaftar);
									while($row = mysqli_fetch_assoc($sql_pendaftar)) { 
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['NISN']; ?></td>
									<td><?php echo $row['nama']; ?></td>
									<td><?php echo $row['alamat']; ?></td>
									<td><?php echo $row['sekolah_asal']; ?></td>
									<td>
										<?php if ($row['keterangan'] == "pending") { ?>

										<a href="script/konfirmasi-lolos.php?nisn=<?php echo $row['NISN']; ?>" class="confirm" onclick="return confirm('Konfirmasi lolos?')">Konfirmasi Lolos</a>
										</td>

										<?php } else if ($row['keterangan'] == "lolos") { ?>

										<span class="lolos">Lolos seleksi</span>

										<?php } ?>

									<td>
										<a href="form-pendaftaran.php?type=edit&nisn=<?php echo $row['NISN']; ?>" class="edit"><i class="fas fa-pen"></i></a>
										<a href="script/pendaftar-delete-data.php?nisn=<?php echo $row['NISN']; ?>" class="del" onclick="return confirm('Konfirmasi hapus data?')"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<?php $i++; } ?>
							</table>
						</div>
						<p class="remove-margin">Menampilkan <?php echo $jml_data; ?> data dari database</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include 'footer.php'; ?>