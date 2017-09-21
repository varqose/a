<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>polaczenie z baza zbanowanych</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	
	$linkDB = @mysqli_connect("localhost", "root", "", "world");
	if(mysqli_connect_errno()){
		echo "Błąd połączenia ".mysqli_connect_errno();
	} else {
		echo "<p>Połączono z bazą</p>";
		$sql = mysqli_query($linkDB, "SELECT * FROM city");
		if(!empty($sql)) {
			echo "<table>";
			echo "<tr><th>ID</th><th>Name</th><th>CountryCode</th><th>District</th><th>Population</th></tr>";
			while($myrow = mysqli_fetch_array($sql)){
				echo "<tr>";
				echo "<td>".$myrow['ID']."</td>";
				echo "<td>".$myrow['Name']."</td>";
				echo "<td>".$myrow['CountryCode']."</td>";
				echo "<td>".$myrow['District']."</td>";
				echo "<td>".$myrow['Population']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			mysqli_free_result($sql);
			mysqli_close($linkDB);
		} else {
			echo "Błąd połączenia";
		}
	}
		
	?>
</body>
</html>
