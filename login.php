<?php include 'header.php'; ?>

<form action="script/login-script.php" method="post">
	<main class="login-page">
		<section class="login-container">

			<?php 
				// jika login gagal, tampilkan pesan
				if (isset($_GET['login'])) { 
			?>
			<span class="alert">Login gagal! username atau password yang anda masukkan salah.</span>
			<?php } else { ?>

			<h3>Selamat Datang!</h3>
			<p>Login untuk melanjutkan ke dashboard.</p>

			<?php } ?>

			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="w-100" placeholder="Username anda">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="w-100" placeholder="Password anda" id="PasswordInput">
				<span class="show-hide-password" onclick="PassToggle()"><i class="fas fa-eye" id="EyeIcon"></i></span>
			</div>

			<button type="submit" class="btn btn-medium blue" style="width: 100%;">Log in</button>

			<p style="margin-bottom: 0; margin-top: 20px; line-height: 1.8;">* Membuat akun dan mengganti password, dilakukan oleh superuser</p>
		</section>
	</main>
</form>	
	
<?php include 'footer.php'; ?>