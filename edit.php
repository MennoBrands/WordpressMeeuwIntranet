<?php

$idnummer = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "edith";
$dbname = "wordpress";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, naam, vestiging, afdeling, telefoon, mobiel, fax FROM telefoonlijst WHERE id = $idnummer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$idnummer=$row['id'];			
	$naam=$row['naam'];			
	$vestiging=$row['vestiging'];							
	$afdeling=$row['afdeling'];
	$telefoon=$row['telefoon'];
	$mobiel=$row['mobiel'];
	$fax=$row['fax'];



    }
} else {
    echo "0 results";
}
$conn->close();
?>





<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
<link href="css/bootstrap.min.css" rel="stylesheet">
<form action="edit.php" method="POST" autocomplete="off">
<div class="table-responsive">
	<table>
		<tr>
			<td>
				Name: 
			</td>
			<td>
				<input class="form-control" type="text" placeholder="Name" name="name" autocomplete="off" value="<?php echo $naam; ?>"> 
			</td>
		</tr>
		<tr>
			<td>
				Location: 
			</td>
			<td>
				<input class="form-control" type="text" placeholder="Location" name="location" autocomplete="off" value="<?php echo $vestiging; ?>"> 
			</td>
		</tr>
		<tr>
			<td>
				Department: 			
			</td>
			<td>
				<input class="form-control" type="text" placeholder="Department" name="department" autocomplete="off" value="<?php echo $afdeling; ?>"> 
			</td>
		</tr>
		<tr>
			<td>
				Phone: 
			</td>
			<td>
				<input class="form-control" type="text" placeholder="Phone" name="phone" autocomplete="off" value="<?php echo $telefoon; ?>"> 
			</td>
		</tr>
		<tr>
			<td>
				Mobile: 
			</td>
			<td>
				<input class="form-control" type="text" placeholder="Mobile" name="mobile" autocomplete="off" value="<?php echo $mobiel; ?>"> 
			</td>
		</tr>
		<tr>
			<td>
				Fax: 
			</td>
			<td>
				<input class="form-control" type="text" placeholder="Fax" name="fax" autocomplete="off" value="<?php echo $fax; ?>"> 
			</td>
		</tr>
		<tr>
			<td>
				<input type="hidden" name="klachtid" value="<?php echo $_GET['id']; ?>">
				<input type="submit" class="btn btn-success" value="Update" name="update">
			</td>
		</tr>
	</table>
</div>
</from>
<?php			
	if(isset($_POST['update'])) {

		$name = $_POST['name'];
		$location = $_POST['location'];
		$department = $_POST['department'];
		$phone = $_POST['phone'];
		$mobile = $_POST['mobile'];
		$fax = $_POST['fax'];
		$idnummer = $_REQUEST['klachtid'];
																
		$connect = mysqli_connect("localhost", "root", "edith", "wordpress") or die ("Kan geen connectie maken met de database");
														
		$query = "UPDATE telefoonlijst SET naam =IF(LENGTH('$name')=0, naam, '$name'), vestiging=IF(LENGTH('$location')=0, vestiging, '$location'), afdeling=IF(LENGTH('$department')=0, afdeling, '$department'), telefoon=IF(LENGTH('$phone')=0, telefoon, '$phone'), mobiel=IF(LENGTH('$mobile')=0, mobiel, '$mobile'), fax=IF(LENGTH('$fax')=0, fax, '$fax') WHERE id='$idnummer '";
		mysqli_query ($connect, $query) or die ("Update failed!");
		
		header('Location: http://intra.demeeuw.com/wordpress/?page_id=2355'); 

}	
?>
</body>
</html>
