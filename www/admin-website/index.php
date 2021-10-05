<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
$servername = "asgn2-db.cddfazz6mjhm.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin3409853";
$dbname = "business";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}


	// username and password sent from form 
	$myusername = mysqli_real_escape_string($con, $_POST['username']);
	$mypassword = mysqli_real_escape_string($con, $_POST['password']);

	$query = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";

	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$active = $row['active'];

	$count = mysqli_num_rows($result);
	// If result matched $myusername and $mypassword, table row must be 1 row

	if ($count == 1) {
		header("location: home.php");
	} else {
		$error = "Your Login Name or Password is invalid";
	}
?>

<body>
	<main>
		<section class="boxes">

			<h2>Login to proceed:</h2>

			<form method="post" action="">

				<input type="text" name="username" placeholder="Enter your username" required>

				<input type="text" name="password" placeholder="Enter your password" required>

				<label><input type="submit" name="submit" value="Login"></label>
			</form>
		</section>
	</main>

</body>

</html>