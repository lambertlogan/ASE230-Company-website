<?php
	include_once "contacts.php";
	$infos = getContacts();
	$row = getContact($_GET["id"]);	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Details</title>
	</head>
	<body>
		<h1>Contact Details</h1>

	<?php 
		
		echo "<p><b>Name:</b> " . $row[0] . "</p>";
		echo "<p><b>Email:</b> " . $row[1] . "</p>";
		echo "<p><b>Subject:</b> " . $row[2] , "</p>";
		echo "<p><b>Message:</b><br><br> " . $row[3] . "</p>";
	?>
		<br>
		<a href="index.php">Back to Contact List</a>
	</body>
</html>