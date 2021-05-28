<?php include 'header.php'; ?>

<main>
	<section class="page-inf">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="pi">
						<div class="pi-left">
							<p>Form Petugas</p>
						</div>
						<div class="pi-right">
							<p><a href="index.php">Dashboard</a> / <span>Form Petugas</span></p>
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
					<?php 
						if (isset($_GET['type'])) {

							$type = $_GET['type'];

							if ($type == "add") {
								include 'script/form-add-petugas.php';
							} else if ($type == "edit") {
								include 'script/form-edit-petugas.php';
							} else if ($type == "") {
								header("location:index.php?status=invalid");
							}

						} else {
							header("location:index.php?status=invalid");
						}
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include 'footer.php'; ?>