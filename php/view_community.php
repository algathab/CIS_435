<?php
require_once ('database.php');

$queryColors = "SELECT * FROM color_set";
$execStatement = $conn -> prepare($queryColors);
$execStatement -> execute();
$colorList = $execStatement -> fetchAll();
$execStatement -> closeCursor();
?>

<!DOCTYPE html>

<html lang="EN">
	<head>
		<title>Community Colors</title>
		<meta charset="UTF-8"/>
		<!-- <link rel="stylesheet" href="styles/view_students.css" /> -->
	</head>
	<body>
		<h1>Community Picks</h1>
		
			<?php
			echo "<table>
			<tr>
				<th>Color1</th>
				<th>Color2</th>
				<th>Color3</th>
				<th>Color4</th>
				<th>Color5</th>
				<th>ID</th>
			</tr>";
			foreach ($colorList as $color_set) {
				echo "<tr>";
				echo "<td>" . $color_set['COLOR1'] . "</td>
				<td>" . $color_set['COLOR2'] . "</td>
				<td>" . $color_set['COLOR3'] . "</td>
				<td>" . $color_set['COLOR4'] . "</td>
				<td>" . $color_set['COLOR5'] . "</td>";
				echo "<td>" . $color_set['ID'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			?>
			<br><a href="../index.php">GO BACK TO HOME PAGE</a>
	</body>

</html>

