<?php
	include_once "team.php";
	
	$id = $_GET["id"];
	$team = getTeam();
	
	if ($_SERVER["REQUEST_METHOD"] === "POST"){
		if ($_POST["confirm"] == "yes"){
			deleteMember($id);
			header("Location: index.php");
			exit();
		}
		else{
			header("Location: index.php");
			exit();
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Confirmation</title>
	</head>
	<body>
		<h1>Delete Member</h1>
		<p>Are you sure you want to delete this member?</p>
		<p>
			<b>
				<?php echo "Name: " . $team[$id]["name"] . "<br>";?>
				<?php echo "Position: " . $team[$id]["position"] . "<br>";?>
				<?php echo "Description: " . $team[$id]["description"] . "<br>";?>
				<?php echo "Image Path: " . $team[$id]["image"];?>
			</b>
		</p>
		<form method="post">
			<button type="submit" name="confirm" value="yes">Yes, Delete</button>
			<button type="submit" name="confirm" value="no">Cancel</button>
		</form>
	</body>
</html>
