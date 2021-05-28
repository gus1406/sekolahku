
<?php
/*
 * jika berada di halaman login maka footer tidak ditampilkan
 */
if ($file_name == "login") {  } else { 
?>
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
<?php } ?>		

<!--Main javascript-->
<script src="assets/js/js.js" type="text/javascript"></script>

</body>
</html>