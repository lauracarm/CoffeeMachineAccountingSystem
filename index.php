<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<script src="http://debug.phonegap.com/target/target-script-min.js#anonymous"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" width=100%/>
		<title>Coffee Machine Accounting System</title>
		<link rel="stylesheet" href="Style/indexStyle.css">
	</head>
	<body>
		<section class ="container">
			<div class="header">
			<img src="images/logo.png" alt="Welcome Coffee Cup Logo">	
			</div>
			<div class="login">
				<form action="login.php" method="post">
					<p>
						<input id="username" type="text" name="username" value="" placeholder="Username or Email">
					</p>
					<p>
						<input id = "password" type="password" name="password" value="" placeholder="Password">
					</p>
					<p class="submit">
						<input type="submit" name="commit" value="login" />
					</p>
					<?php if (!empty($_GET["loginFailed"])) echo "Incorrect login details. Please try again."; ?>
				</form>
			</div>

			<div class="login-help">
				<p>
				<a href="ForgotLogin.php"> Forgot your password?</a> <a href="register.php"> Not a member? Sign up here.</a>
				</p>
			</div>
		</section>
	</body>
</html>
