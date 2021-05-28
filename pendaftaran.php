<?php include 'header.php'; ?>

<main>
	<section class="page-inf">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="pi">
						<div class="pi-left">
							<p>Pendaftaran</p>
						</div>
						<div class="pi-right">
							<p><a href="index.php">Dashboard</a> / <span>Pendaftaran</span></p>
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
						<?php if (isset($_GET['s'])) { $s = $_GET['s']; ?>
							<h3>Pencarian anda untuk <?php echo "'$s'" ?></h3>
							<p>Berikut adalah hasil dari nama yang anda cari</p>
						<?php } else { ?>
							<h3>Data pendaftar</h3>
							<p>Berikut adalah data calon siswa yang mendaftar.</p>
						<?php } ?>

						<span style="display: block; margin-bottom: 15px;">
							<a href="form-pendaftaran.php?type=add" class="btn btn-medium blue">Data Baru <i class="fas fa-plus"></i></a>

							<span>
								<form action="script/search-data.php" method="post" style="display: inline-block;">
									<input type="text" name="search" class="s-input" placeholder="Cari nama...">
									<button type="submit" class="s-button"><i class="fas fa-search"></i></button>
								</form>
							</span>
						</span>
						
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

									if (isset($_GET['s'])) {
										$s = $_GET['s'];
										$sql_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE nama LIKE '%$s%' ORDER BY tgl_mendaftar DESC ");
									} else {
										$sql_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar ORDER BY tgl_mendaftar DESC ");
									}
									
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