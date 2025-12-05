<?php
	include_once "team.php";
	$id = $_GET["id"];
	$member = getMember($id);	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Details</title>
	</head>
	<body>
		<h1>Details</h1>

	<?php 
		
		echo "<p><b>name:</b> " . $member["name"] . "</p>";
		echo "<p><b>position:</b> " . $member["position"] . "</p>";
		echo "<p><b>description:</b> " . $member["description"] . "</p>";
		echo "<p><b>image:</b> <img src='../../" . $member["image"] . "'</p>";
	?>
		<br>
		<a href="index.php">Back to Team List</a>
	</body>
</html>