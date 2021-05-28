<?php include 'header.php'; ?>

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
							<p><a href="index.php">Dashboard</a> / <span>Petugas</span></p>
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
							<h3>Data petugas</h3>
							<p>Berikut adalah data petugas yang terdaftar di sekolahku.</p>
						<?php } ?>

						<span style="display: block; margin-bottom: 15px;">
							<a href="form-petugas.php?type=add" class="btn btn-medium blue">Data Baru <i class="fas fa-plus"></i></a>

							<span>
								<form action="script/search-petugas.php" method="post" style="display: inline-block;">
								<input type="text" name="search" class="s-input" placeholder="Cari nama...">
								<button type="submit" class="s-button"><i class="fas fa-search"></i></button>
								</form>
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

								<?php
									$i = 1;

									if (isset($_GET['s'])) {
										$s = $_GET['s'];
										$sql_petugas = mysqli_query($koneksi, "SELECT * FROM petugas WHERE nama_petugas LIKE '%$s%' ");
									} else {
										$sql_petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
									}

									$jml_data = mysqli_num_rows($sql_petugas);
									while($row = mysqli_fetch_assoc($sql_petugas)) {
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['NIP'] ?></td>
									<td><?php echo $row['nama_petugas']; ?></td>
									<td><?php echo $row['alamat_petugas']; ?></td>
									<td><?php echo $row['telepon_petugas']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td>
										<a href="form-petugas.php?type=edit&nip=<?php echo $row['NIP']; ?>" class="edit"><i class="fas fa-pen"></i></a>
										<a href="script/petugas-delete-data.php?nip=<?php echo $row['NIP']; ?>" class="del" onclick="return confirm('Konfirmasi hapus data?')"><i class="fas fa-trash"></i></a>
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