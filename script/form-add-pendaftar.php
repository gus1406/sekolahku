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

						<h3>Form pendaftaran</h3>
						<p>Input data pendaftaran calon siswa baru.</p>

						<form action="script/pendaftar-add-data.php" method="post">

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
							<input type="date" name="tgl_lahir" class="w-100" placeholder="*14-06-2002">
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

						</form>

					</div>