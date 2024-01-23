<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Style LogIn.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>
	<nav>
		<div class="topnav">
			<div class="logo">
				<img src="Images/petLogo.png" width="260px" height="170px"></label>
			</div>
			<!-- Menu topnav -->
			<b><a href="Registeration.html" class="w3-bar-item ws-button"><i class="fa fa-user-plus w3-text-white"></i> CREATE ACCOUNT</a>
				<a href="contactUs.html" class="w3-bar-item ws-button"><i class="fa fa-phone w3-text-white"></i> CONTACT US</a>
				<a href="bookingApp.html" class="w3-bar-item ws-button"><i class="fa fa-folder w3-text-white"></i> BOOK APPOINTMENT</a>
				<a href="LogIn.html" class="w3-bar-item ws-button"><i class="fa fa-user-circle w3-text-white"></i> SIGN IN</a>
				<a href="homePage.html" class="w3-bar-item ws-button"><i class="fa fa-home w3-text-white"></i> HOME</a>
			</b>
		</div>
	</nav>
</body>

<body2>
	<div class="container">
	<div class="title">Administration Login</div>
		<form action="adminLogin.php" method="post">
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>

			<label>Email</label>
			<div class="row">
				<i class="fas fa-user"></i>
				<input type="email" name="email" placeholder="Email"><br>
			</div>

			<label>Password</label>
			<div class="row">
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="Password"><br>
				<b class="bi bi-eye-slash" id="togglePassword"></b>
			</div>

			<div class="row button">
				<button type="submit">Admin Login</button>
			</div>

		</form>
	</div>

	<script>
		//to hide password
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');

		togglePassword1.addEventListener('click', function(e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('bi-eye');
		});
	</script>
</body2>

<!-- Footer -->
<div class="footer">
	<div class="footer-bottom">
		<p style="text-align: center;">
			<span style="color: #71b7e6">&copy; 2021</span>
			<span style="color: #e6de71"> | PetCare</span>
		</p>
	</div>
</div>

</html>