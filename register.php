<?php
$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

$selected = mysql_select_db("login", $dbhandle);

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];

	$query = mysql_query("SELECT * FROM users WHERE Username='$username'");
	if (mysql_num_rows($query) > 0) {//check if there is already an entry for that username
		die(header("location:register.php?userExists=true&reason=username_already_exists")); ;
	} else {
		if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email'])) {
			mysql_query("INSERT INTO users (Username, Password, Name, Surname, Email) VALUES ('$username', '$password' , '$name' , '$surname' , '$email')");
			header("location:index.php");
		} else {
			die(header("location:register.php?registerFailed=true&reason=enter_all_details"));
		}
	}
}

mysql_close();
?>
<html>
	<head>

		<title>Register</title>
		<link rel="stylesheet" href="Style/style.css">
	</head>
	<body>
		<section class ="container">
			<div class="head">
				Register
			</div>
			<div class="Form">
				<form method="post" action="register.php">
					<p>
						<?php
						if (!empty($_GET["registerFailed"]))
							echo "Please ensure all fields are filled in.";
						?>
						<?php
						if (!empty($_GET["userExists"]))
							echo "Username already exists. Please select a differet Username.";
						?>
						<input id="name" type="text" name="name" value="" placeholder="First Name">
					</p>
					<p>
						<input id = "surname" type="text" name="surname" value="" placeholder="Surname">
					</p>
					<p>
						<input id="emailAddress" type="email" name="email" value="" placeholder="Email">
					</p>
					<p>
						<input id="user" type="text" name="username" value="" placeholder="Enter Username">
					</p>
					<p>
						<input id="createPassword" type="password" name="password" value="" placeholder="Enter password">
					</p>
					<p class="submit">
						<input type="submit" name="commit" value="Submit" />
					</p>
					<p class="login-help">
						<a href="ForgotLogin.php"> Forgot your password? </a><a href="index.php">Already registered? Sign in.</a>
					</p>
				</form>
			</div>

		</section>
	</body>
</html>
