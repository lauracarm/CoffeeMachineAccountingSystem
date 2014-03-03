<html>
	<head>

		<title>Register</title>
		<link rel="stylesheet" href="Style/style.css">
	</head>
	<body>
		<section class ="container">
			<div class="head">
				<img src="images/logo.png" alt="Welcome Coffee Cup Logo">
			</div>
			<div class="Form">
				<form method="post" action="home.php">
					<p>
						<input id="username" type="text" name="username" value="" placeholder="Username">
					</p>
					<p>
						<input id = "password" type="password" name="password" value="" placeholder="Password">
					</p>
					<p class="submit">
						<input type="submit" name="commit" value="Login" />
					</p>
					<?php if (!empty($_GET["loginFailed"])) echo "Incorrect login details. Please try again.";?>
					<p class="login-help">
						<a href="ForgotLogin.php"> Forgot your password?</a><a href="register.php"> Not a member? Sign up here.</a>
					</p>
				</form>
			</div>

		</section>
	</body>
</html>
