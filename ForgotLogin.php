<?php
	$username = "root";
	$password = "";
	$hostname = "localhost";
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	
	$selected = mysql_select_db("login", $dbhandle);

	if(isset($_POST['email'])) {
		$email = $_POST['email'];
		$query = mysql_query("SELECT * FROM users WHERE Email='$email'");
	}

	mysql_close();
?>
<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" width=100%/>
		<title>Register</title>
		<link rel="stylesheet" href="Style/style.css">
	</head>
	<body>
		<section class ="container">
			<div class="head">
			Forgot Login?
			</div>
			<div class="Form">
				<p style="text-align: center">Enter email address to recieve an email reminder of your password.</p>
				<form method="post" action="index.html">
					
					<p>
						<input id="email" type="email" name="email" value="" placeholder="Enter Email">
					</p>
					<p class="submit">
						<input type="submit" name="commit" value="Submit" />
					</p>
					<p class="login-help">
						<a href="register.php"> Not registered?</a> <a href="index.php">  Remembered your details? Sign in. </a>
					</p>
					
				</form>
			</div>

		</section>
	</body>
</html>
