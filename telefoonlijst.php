<table id="dev-table">
	<tr>
        <input type="text" size="50"  id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search..." $(input-element).filterTable() autofocus />
		&nbsp
		<input type="button" class="btn btn-primary" value="Print" onClick="window.print()">
    </tr>
<?php
	$connect = mysqli_connect("localhost", "root", "edith", "wordpress") or die ("Kan geen connectie maken met de database");												
	    $query = "SELECT * FROM `telefoonlijst`";	
		$result = mysqli_query ($connect, $query); 	
            echo "<thead>";
            echo "<tr>";
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
				$naam=$record['naam'];			
				$vestiging=$record['vestiging'];							
				$afdeling=$record['afdeling'];
				$telefoon=$record['telefoon'];
				$mobiel=$record['mobiel'];
				$fax=$record['fax'];
			echo "<tr>";
            echo "<td>".$naam."</td>";
			echo "<td>".$vestiging."</td>";
			echo "<td>".$afdeling."</td>";
			echo "<td>".$telefoon."</td>";
			echo "<td>".$mobiel."</td>";
			echo "<td>".$fax."</td>";			
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