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
		<title>Community Color Palettes</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="...\styles/normalize.css" />
		<link rel="stylesheet" href="..\styles/main.css" />
		<script src="scripts/colorPicker.js"></script>
	</head>
	<body>
		<header>
			
			<h1>COMMUNITY COLOR PALETTES</h1>
		</header>
		
		<main>
			<FORM>
				<INPUT Type="button" class="backButton" VALUE="< Back" onClick="history.go(-1);return true;">
			</FORM>
			<table class="communityTable">
				<tr> 
					<th div class="firstCol">ID</th>
					<th>Color1</th>
					<th>Color2</th>
					<th>Color3</th>
					<th>Color4</th>
					<th>Color5</th>
				</tr>
			<?php
			foreach ($colorList as $color_set) {
				echo "<tr>";
				echo "<td class='firstCol'>" . $color_set['ID'] . "</td>";
				echo "<td bgcolor='" . $color_set['COLOR1'] . "'></td>
				<td bgcolor='" . $color_set['COLOR2'] . "'></td>
				<td bgcolor='" . $color_set['COLOR3'] . "'></td>
				<td bgcolor='" . $color_set['COLOR4'] . "'></td>
				<td bgcolor='" . $color_set['COLOR5'] . "'></td>";
				echo "</tr>";
				}
			?>
			</table>
		</main>
	</body>
</html>

