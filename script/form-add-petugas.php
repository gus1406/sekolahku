					<div class="form-container">
						<?php
						if (isset($_GET['add'])) {
							$add = $_GET['add'];
							if ($add == "berhasil") {
								echo "<span class=\"succes\">Tambah data berhasil!</span>";
							} else {
								echo "<span class=\"danger\">Tambah data gagal!</span>";
							}
						}
						?>

						<h3>Form petugas</h3>
						<p>Input data petugas baru.</p>

						<form action="script/petugas-add-data.php" method="post">

						<div class="form-group">
							<label for="nip">NIP <small>(Nomor Identitas Pegawai)</small></label>
							<input type="number" name="nip" class="w-30" placeholder="*200214062021051001">
						</div>

						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" name="nama" class="w-100" placeholder="*Arista Budi Laksmana">
						</div>

						<div class="form-group">
							<label for="alamat">Alamat Lengkap</label>
							<input type="text" name="alamat" class="w-100" placeholder="*Jln Kenanga No xx">
						</div>

						<div class="form-group">
							<label for="no_tel">No Telepon</label>
							<input type="number" name="no_tel" class="w-30" placeholder="*085737548643">
						</div>

						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="w-50" placeholder="*gus1406">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" name="password" class="w-50" placeholder="*budilaksmana">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-medium blue">Simpan Data <i class="fas fa-save"></i></button>
						</div>

						</form>
					</div>