<link href="css/bootstrap.min.css" rel="stylesheet">
<table id="dev-table">
	<tr>
        <input type="text" size="50"  id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search..." $(input-element).filterTable() autofocus />
		&nbsp;
		<input type="button" class="btn btn-primary" value="Print" onClick="window.print()">
		&nbsp;
		<input type=button class="btn btn-success" onClick="parent.location='?page_id=2348'" value='Add a new number'>
    </tr>
<?php
	$connect = mysqli_connect("localhost", "root", "edith", "wordpress") or die ("Kan geen connectie maken met de database");												
	    $query = "SELECT * FROM `telefoonlijst`";	
		$result = mysqli_query ($connect, $query); 	
            echo "<thead>";
            echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Name</th>";
			echo "<th>Location</th>";
			echo "<th>Department</th>";
            echo "<th>Phone</th>";
            echo "<th>Mobile</th>";
            echo "<th>Fax</th>";
            echo "<tr>";
            echo "</thead>";
            echo "<tbody>";
			while( $record=mysqli_fetch_array($result) ) {		
				$idnummer=$record['id'];			
				$naam=$record['naam'];			
				$vestiging=$record['vestiging'];							
				$afdeling=$record['afdeling'];
				$telefoon=$record['telefoon'];
				$mobiel=$record['mobiel'];
				$fax=$record['fax'];
			echo "<tr>";
         		echo "<td>".$idnummer."</td>";
          		echo "<td>".$naam."</td>";
			echo "<td>".$vestiging."</td>";
			echo "<td>".$afdeling."</td>";
			echo "<td>".$telefoon."</td>";
			echo "<td>".$mobiel."</td>";
			echo "<td>".$fax."</td>";	
			echo "<td> <a href='edit.php?id=".$idnummer."'<i class='glyphicon glyphicon-pencil' titel='Edit'></i></a> </td>";

// echo "<td> <form name='form' action='edit.php' method='GET'></td>";
// echo "<td>  <input type='hidden' name='search' value=".$idnummer." </td>";
// echo "<td>  <input type='submit' value='Edit'></td>";
// echo "<td></form></td>";

			echo "<td> <a href='delete.php?id=".$idnummer."' onClick=\"return confirm('Are you sure to delete this number?')\"><i class='glyphicon glyphicon-remove' titel='Delete'></i></a></td>";			
			echo "</tr>";
			}
			echo "<tr>";	
			echo "</tbody>";
			echo "</table>";	
 ?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="zoekentable.js"></script>
</body>
</html>