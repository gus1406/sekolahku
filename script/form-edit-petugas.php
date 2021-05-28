					<?php
					$nip = $_GET['nip'];
					$sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE NIP='$nip' ");
					$row = mysqli_fetch_assoc($sql);
					?>
					<div class="form-container">
						<?php
						if (isset($_GET['edit'])) {
							$edit = $_GET['edit'];
							if ($edit == "berhasil") {
								echo "<span class=\"succes\">Edit data berhasil!</span>";
							} else {
								echo "<span class=\"danger\">Edit data gagal!</span>";
							}
						}
						?>

						<h3>Form edit petugas</h3>
						<p>Ubah data petugas pada form berikut.</p>

						<form action="script/petugas-update-data.php" method="post">

						<input type="hidden" name="nip" class="w-30" placeholder="*200214062021051001" value="<?php echo $row['NIP']; ?>">

						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" name="nama" class="w-100" placeholder="*Arista Budi Laksmana" value="<?php echo $row['nama_petugas']; ?>">
						</div>

						<div class="form-group">
							<label for="alamat">Alamat Lengkap</label>
							<input type="text" name="alamat" class="w-100" placeholder="*Jln Kenanga No xx" value="<?php echo $row['alamat_petugas']; ?>">
						</div>

						<div class="form-group">
							<label for="no_tel">No Telepon</label>
							<input type="number" name="no_tel" class="w-30" placeholder="*085737548643" value="<?php echo $row['telepon_petugas']; ?>">
						</div>

						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="w-50" placeholder="*gus1406" value="<?php echo $row['username']; ?>">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" name="password" class="w-50" placeholder="*tambahkan password baru atau kosongkan jika tidak di ubah">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-medium blue">Simpan Data <i class="fas fa-save"></i></button>
						</div>

						</form>
					</div>