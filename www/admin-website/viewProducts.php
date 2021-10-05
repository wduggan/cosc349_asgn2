<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php

$servername = "192.168.2.13";
$username = "business-admin";
$password = "admin";
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
		<a>Welcome Admin</a>
	</section>

	<header>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a>View Products</a></li>
				<li><a href="addProducts.php">Add Products</a></li>
			</ul>
		</nav>
	</header>


	<main>
		<section class="boxes">

			<h2>View Products:</h2>

			<table>
				<thead>
					<tr>
						<th>Product-ID</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Quantity</th>
					</tr>
				</thead>
				<tbody>

					<?php

					$sql = "SELECT * FROM products;";
					$result = $con->query($sql);

					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row['productId'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['description'] . "</td>";
						echo "<td>" . $row['price'] . "</td>";
						echo "<td>" . $row['quantity'] . "</td>";
						echo "</tr>";
					}
					?>

				</tbody>
			</table>

		</section>
	</main>

	<footer class="boxes">
		<p>You are the admin. Admin = power.</p>
	</footer>

</body>

</html>