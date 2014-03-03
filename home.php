<?php
$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

$selected = mysql_select_db("login", $dbhandle);

mysql_close();
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Home</title>
		<link rel="stylesheet" href="Style/style.css">
	</head>
	<body>
		<nav class="nav">
			<ul>
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Transaction History</a>
				</li>
				<li>
					<a href="#">Statements</a>
				</li>
			</ul>
		</nav>
	
			<table class="center">
				<form method="post" action="">
					<tr>
						<th>
							<img src="images/coffee.png" alt="Coffee"/></a>
						</th>
						<th>
							<img src="images/teapot.png" alt="Tea"/>
						</th>
						<th>
							<img src="images/hotchocolate.png" alt="Hot Chocolate"/>
						</th>
					</tr>
					<tr>
						<th>
							Coffee
						</th>
						<th>
							Tea
						</th>
						<th>
							Hot Chocolate
						</th>
					</tr>
						<tr>
						<th>
							<input id="minus" type="button" name="minus" value="-" placeholder="minus">
							<input id="qty" type="text" name="qty" value="0" placeholder="qty" style="text-align: center">
							<input id="plus" type="button" name="plus" value="+" placeholder="plus">
						</th>
						<th>
							<input id="minus" type="button" name="minus" value="-" placeholder="minus">
							<input id="qty" type="text" name="qty" value="0" placeholder="qty" style="text-align: center">
							<input id="plus" type="button" name="plus" value="+" placeholder="plus">
						</th>
						<th>
							<input id="minus" type="button" name="minus" value="-" placeholder="minus">
							<input id="qty" type="text" name="qty" value="0" placeholder="qty" style="text-align: center">
							<input id="plus" type="button" name="plus" value="+" placeholder="plus">
						</th>
					</tr>

				</form>
			</div>

		
	</body>
</html>