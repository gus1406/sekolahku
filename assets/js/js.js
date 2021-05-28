function OpenMenu() {
	document.getElementById("NavMenu").style.display = 'block';
	document.getElementById("OpenMenu").style.display = 'none';
	document.getElementById("CloseMenu").style.display = 'inline-block';
}

function CloseMenu() {
	document.getElementById("NavMenu").style.display = 'none';
	document.getElementById("OpenMenu").style.display = 'inline-block';
	document.getElementById("CloseMenu").style.display = 'none';
}

function PassToggle() {
	var x = document.getElementById("PasswordInput");
	var y = document.getElementById("EyeIcon");

	if (x.type === "password") {
		x.type = "text";
		y.classList.remove("fa-eye");
		y.classList.add("fa-eye-slash");
	} else {
		x.type = "password";
		y.classList.add("fa-eye");
		y.classList.remove("fa-eye-slash");
	}
}