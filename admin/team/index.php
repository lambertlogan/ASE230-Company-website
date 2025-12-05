<?php
	include_once "team.php";
	$infos = getTeam();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>teams</title>
	</head>
	<body>
		<h1>Team Index Page</h1>
		<button type="button"><a href='create.php?id='>Create</a></button>
		<br>
		<table border="2" cellpadding="10">
		<tr>
			<td>Name</td>
			<td>Position</td>
			<td>Description</td>
			<td>Image</td>
			<td>Details</td>
			<td>Delete</td>
		</tr>
		<?php
		for ($x = 0; $x < count($infos); $x++){
			$row = $infos[$x];
			echo "<tr>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["position"] . "</td>";
				echo "<td>" . $row["description"] . "</td>";
				echo "<td><img src='../../" . $row["image"] . "' width='50'</td>";
				echo "<td><a href='detail.php?id=" . $x . "'>View</a></td>";
				echo "<td><a href='delete.php?id=" . $x . "'>Delete</a></td>";
			echo "</tr>";
		}
		?>
		</table>
	</body>
</html>
