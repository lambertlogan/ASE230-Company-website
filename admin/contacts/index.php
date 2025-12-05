<?php
	include_once "contacts.php";
	$infos = getContacts();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Contact</title>
	</head>
	<body>
		<h1>Contact Requests</h1>
		<table border="2" cellpadding="10">
		<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Subject</td>
			<td>Details</td>
		</tr>

		<?php
		for ($x = 1; $x < count($infos); $x++){
			$row = $infos[$x];
			echo "<tr>";
			echo "<td>" . $row[0] . "</td>";
			echo "<td>" . $row[1] . "</td>";
			echo "<td>" . $row[2] . "</td>";
			echo "<td><a href='detail.php?id=" . $x . "'>View</a></td>";
			echo "</tr>";
		}
		?>
		</table>
	</body>
</html>
