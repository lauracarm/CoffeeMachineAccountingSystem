<?php
$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

$selected = mysql_select_db("login", $dbhandle);

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE Username='$username' and Password='$password'";
$result = mysql_query($query);
$count = mysql_num_rows($result);

mysql_close();

if ($count == 1) {
	header("location:login_success.php");
} else {
	die(header("location:index.php?loginFailed=true&reason=incorrect_details"));
	;
}
?>
