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

?>

<body>
	<section class="top-box">
	<figure>
		<img src="https://349-db-backup.s3.amazonaws.com/fake-logo.jpg" alt="Fake Logo" width="80" height="80"> 
	</figure>
        <a>Welcome Admin</a>
	</section>

	<header>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="viewProducts.php">View Products</a></li>
				<li><a>Add Products</a></li>
			</ul>
		</nav>
	</header>


	<main>
		<section class="boxes">

			<h2>Add a Product:</h2>

			<form method="post" action="">

				<input type="text" name="name" placeholder="Enter a name" required>

				<input type="text" name="description" placeholder="Enter a description" required>

				<input type="number" name="price" placeholder="Enter a price" min="0" step=".01" required>

				<input type="number" name="quantity" placeholder="Enter a quantity" min="0" required>

				<label><input type="submit" name="submit" value="Add product"></label>
			</form>

			<?php
			$name = $_POST['name'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];

			$query = "INSERT INTO products (name, description, price, quantity) VALUES ('$name', '$description', '$price', '$quantity')";

			if ($con->query($query) === TRUE) {
				echo "Product created, check 'View Products'";
			}

			?>

		</section>
	</main>

	<footer class="boxes">
		<p>You are the admin. Admin = power.</p>
	</footer>

</body>

</html>