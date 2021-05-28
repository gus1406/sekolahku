					<?php
					$nisn = $_GET['nisn'];
					$sql = mysqli_query($koneksi, "SELECT * FROM pendaftar WHERE NISN='$nisn' ");
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
						
						<h3>Form edit pendaftar</h3>
						<p>Ubah data pendaftar pada form berikut.</p>

						<form action="script/pendaftar-update-data.php" method="post">

						<input type="hidden" name="nisn" value="<?php echo $row['NISN']; ?>">

						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" name="nama" class="w-100" placeholder="*Arista Budi Laksmana" value="<?php echo $row['nama']; ?>">
						</div>

						<div class="form-group">
							<label for="jk">Jenis Kelamin</label>
							<select name="jk" class="w-30">
								<?php if ($row['jenis_kelamin'] == "Laki - Laki") { ?>
									<option value="Laki - Laki">Laki - Laki</option>
									<option value="Perempuan">Perempuan</option>
								<?php } else if ($row['jenis_kelamin'] == "Perempuan") { ?>
									<option value="Perempuan">Perempuan</option>
									<option value="Laki - Laki">Laki - Laki</option>	
								<?php } ?>
							</select>
						</div>

						<div class="form-group">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="text" name="tgl_lahir" class="w-100" placeholder="*14/06/2002" value="<?php echo $row['tgl_lahir']; ?>">
						</div>

						<div class="form-group">
							<label for="agama">Agama</label>
							<input type="text" name="agama" class="w-30" placeholder="*Hindu" value="<?php echo $row['agama']; ?>">
						</div>

						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" class="w-100" placeholder="*Jl Kenanga Gng xx No xx" value="<?php echo $row['alamat']; ?>">
						</div>

						<div class="form-group">
							<label for="no_tel">No Telepon</label>
							<input type="number" name="no_tel" class="w-30" placeholder="085737xxxxxx" value="<?php echo $row['no_telepon']; ?>">
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="w-50" placeholder="*budilaksmana@gmail.com" value="<?php echo $row['email']; ?>">
						</div>

						<div class="form-group">
							<label for="sekolah_asal">Sekolah Asal</label>
							<input type="text" name="sekolah_asal" class="w-50" placeholder="*Smp 1 (daerah)" value="<?php echo $row['sekolah_asal']; ?>">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-medium blue">Simpan Data <i class="fas fa-save"></i></button>
						</div>

						</form>

					</div>