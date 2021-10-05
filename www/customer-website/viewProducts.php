<!DOCTYPE html>
<html lang="en">

<head>
	<title>Customer Website</title>
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
		<a href="http://ec2-184-73-128-114.compute-1.amazonaws.com/">Admin</a>
	</section>

	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a>View Products</a></li>
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
						<th></th>
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
						echo "<td><button id='buy'>Buy</button></td>";
						echo "</tr>";
					}
					?>

				</tbody>
			</table>

		</section>
	</main>

	<footer class="boxes">
		<p>We sell stuff</p>
	</footer>

</body>

</html>