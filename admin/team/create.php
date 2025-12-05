<?php
	include_once "team.php"; 	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $position = $_POST["position"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    
	addMember($name, $position, $description, $image);
    $team = getTeam();
    $newId = count($team);

    header("Location: edit.php?id=" . $newId - 1 . "");
    exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create members</title>
	</head>
	<body>
		<h1>Create a new member</h1>
		<form method="post">
			<p>
				<label>Name:</label><br>
				<input type="text" name="name">
			</p>
			<p>
				<label>Position:</label><br>
				<input type="text" name="position">
			</p>
			<p>
				<label>Description:</label><br>
				<textarea name="description" rows="5"></textarea>
			</p>
			<p>
				<label>Image:</label><br>
				<input type="text" name="position">
			</p>
			<p>
				<button type="submit">Create Member</button>
			</p>
		</form>
		<br>
		<a href="index.php">Team List</a>
	</body> 
<body>
