<link href="css/bootstrap.min.css" rel="stylesheet">
<form action="nieuwnummer.php" method="POST" autocomplete="off">
	<table>
		<tr>
			<td>
				Name:
			</td>
			<td>
				<input type="text" placeholder="Name" name="name" autocomplete="off"> 
			</td>
		</tr>
		<tr>
			<td>
				Location: 
			</td>
			<td>
				<input type="text" placeholder="Location" name="location" autocomplete="off"> 
			</td>
		</tr>
		<tr>
			<td>
				Department:
			</td>
			<td>
				<input type="text" placeholder="Department" name="department" autocomplete="off"> 
			</td>
		</tr>
		<tr>
			<td>
				Phone:
			</td>
			<td>
				<input type="text" placeholder="Phone" name="phone" autocomplete="off"> 
			</td>
		</tr>
		<tr>
			<td>
				Mobile:
			</td>
			<td>
				<input type="text" placeholder="Mobile" name="mobile" autocomplete="off"> 
			</td>
		</tr>
		<tr>
			<td>
				Fax:
			</td>
			<td>
				<input type="text" placeholder="Fax" name="fax" autocomplete="off"> 
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" class="btn btn-success" value="Add" name="Add" ">
			</td>
		</tr>
	</table>
</from>

<?php

	if (isset($_POST['name'])) {					

		$name = $_POST['name'];
		$location = $_POST['location'];
		$department = $_POST['department'];
		$phone = $_POST['phone'];
		$mobile = $_POST['mobile'];
		$fax = $_POST['fax'];
																
		$connect = mysqli_connect("localhost", "root", "edith", "wordpress") or die ("Kan geen connectie maken met de database");
															
		$query = "INSERT INTO `telefoonlijst` (`id`, `naam`,`vestiging`, `afdeling`, `telefoon`, `mobiel`, `fax`) VALUES (NULL,'$name', '$location','$department', '$phone', '$mobile', '$fax')";
		mysqli_query ($connect, $query) or die ("Adding number failed!"); 
		
		header('Location: http://intra.demeeuw.com/wordpress/?page_id=2355'); 
	}
?>
