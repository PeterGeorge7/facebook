<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Facebook Login Page</title>
	<link rel="stylesheet" href="login.css" />
</head>

<body>
	<div class="content">
		<div class="flex-div">
			<div class="name-content">
				<h1 class="logo">Facebook</h1>
				<p>
					Connect with friends and the world around you on
					Facebook.
				</p>
			</div>
			<form method="post" action="../../controller/LoginController.php">
				<input name="EmailOrPhone" type="text" placeholder="Email or Phone Number" required />
				<input name="password" type="password" placeholder="Password" required />
				<?php $showed_email = isset($_GET['error_email']) ? "block" : "none"; ?>
				<?php $showed_pass = isset($_GET['error_pass']) ? "block" : "none"; ?>
				<p style="color:red;display:<?= $showed_email  ?>">Incorrect email or phone number</p>
				<p style="color:red;display:<?= $showed_pass  ?>">Incorrect password</p>
				<input type="submit" value="Log in" class="login" />
				<a href="#">Forgot Password ?</a>
				<hr />

				<a href="../register/register.php" class="create-account">Create New Account</a>
			</form>
		</div>
	</div>
</body>

</html>