<?php

	$connect = mysqli_connect("localhost", "root", "edith", "wordpress") or die ("Kan geen connectie maken met de database");

	$idnummer = $_REQUEST['idnummer'];
												
	$query = "DELETE FROM `telefoonlijst` WHERE id = $idnummer ";	
	$result = mysqli_query ($connect, $query); 	

	header('Location: http://intra.demeeuw.com/wordpress/?page_id=2355'); 

?>
