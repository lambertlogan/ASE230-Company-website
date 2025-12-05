<?php
	include_once "team.php"; 	
	$id = $_GET["id"];
	$line = getMember($id);
	
	if ($_SERVER["REQUEST_METHOD"] === "POST"){
		$name = $_POST["name"];
        $position = $_POST["position"];
        $description = $_POST["description"];
        $image = $_POST["image"];
		
		editMember($id, $name, $position, $description, $image);
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Members</title>
</head>
	<body>
		<h1>Edit Member</h1>
		<h3>ID Number Is :<?php echo($id );?></h3>
		<form method="post">
			<p>
				<label>Name:</label><br>
				<?php echo"<input type='text' name='name' value='" . $line["name"] . "'>"?>
			</p>
			<p>
				<label>Position:</label><br>
				<?php echo"<input type='text' name='position' value='" . $line["position"] . "'>"?>
			</p>
			<p>
				<label>Description:</label><br>
				<?php echo"<input type='text' name='description' value='" . $line["description"] . "'>"?>
			</p>
			<p>
				<label>Image:</label><br>
				<?php echo"<input type='text' name='image' value='" . $line["image"] . "'>"?>
			</p>
			<p>
				<button type="submit">Save Edits</button>
			</p>
		</form>
		<br>
		<a href="index.php">Back to Full List</a>
	</body>
	
</html>