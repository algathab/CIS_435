<!DOCTYPE html>
<?php
	$color1 = "#ff0000";
	$color2 = '#00ff00';
	$color3 = '#0000ff';
	$color4 = '#ffffff';
	$color5 = '#000000';

	if (isset($_GET['submit'])){
		$color1 = $_GET['color1'];
		$color2 = $_GET['color2'];
		$color3 = $_GET['color3'];
		$color4 = $_GET['color4'];
		$color5 = $_GET['color5'];
	}
	else
	{
		echo "not submitted";
	}
?>


<html lang="en">
	<head>
		<title>COLOR PICKER</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/normalize.css" />
		<link rel="stylesheet" href="styles/main.css" />
		<script src="scripts/colorPicker.js"></script>
	</head>

	<body>
		<header>
			<h1>PICK COLORS</h1>
		</header>
		
		<main>
			<form method="get" action="index.php" id="colorForm" name="colorForm">
				<table border="1px black" id="pickerTable">
					<tr class="colorBlock">
						<div>
							<td><input type="color" id="color1" name="color1" value="<?php echo $color1; ?>"></td>
						</div>
						<div>
							<td><input type="color" id="color2" name="color2" value="<?php echo $color2; ?>"></td>
						</div>
						<div>
							<td><input type="color" id="color3" name="color3" value="<?php echo $color3; ?>"></td>
						</div>
						<div>
							<td><input type="color" id="color4" name="color4" value="<?php echo $color4; ?>"></td>
						</div>
						<div>
							<td><input type="color" id="color5" name="color5" value="<?php echo $color5; ?>"></td>
						</div>
					</tr>
					<tr class="slider">
						<td>
							R: <input type="range" min="0" max="255" /> <span id="r1">0</span>
						</td>
						<td>
							R: <input type="range" min="0" max="255" /> <span id="r2">0</span>
						</td>
						<td>
							R: <input type="range" min="0" max="255" /> <span id="r3">0</span>
						</td>
						<td>
							R: <input type="range" min="0" max="255" /> <span id="r4">0</span>
						</td>
						<td>
							R: <input type="range" min="0" max="255" /> <span id="r5">0</span>
						</td>
					</tr>
					<tr class="slider">
						<td>
							G: <input type="range" min="0" max="255" /> <span id="g1">0</span>
						</td>
						<td>
							G: <input type="range" min="0" max="255" /> <span id="g2">0</span>
						</td>
						<td>
							G: <input type="range" min="0" max="255" /> <span id="g3">0</span>
						</td>
						<td>
							G: <input type="range" min="0" max="255" /> <span id="g4">0</span>
						</td>
						<td>
							G: <input type="range" min="0" max="255" /> <span id="g5">0</span>
						</td>
					</tr>
					<tr class="slider">
						<td>
							B: <input type="range" min="0" max="255" /> <span id="b1">0</span>
						</td>
						<td>
							B: <input type="range" min="0" max="255" /> <span id="b2">0</span>
						</td>
						<td>
							B: <input type="range" min="0" max="255" /> <span id="b3">0</span>
						</td>
						<td>
							B: <input type="range" min="0" max="255" /> <span id="b4">0</span>
						</td>
						<td>
							B: <input type="range" min="0" max="255" /> <span id="b5">0</span>
						</td>
					</tr>
				</table>
				<td colspan="5"><input id="submit" name="submit" type="submit" value="submit">
			</form>

			<?php
				if (isset($_GET['submit']))
				{
					echo "<br><br>";
					//var_dump($_GET);
					echo "<br>";
					require ('php/insert.php');
				} 
				else 
				{
					echo "<p>Not Inserted</p>";
				}
			?>

			<br>
			<a class="larger"  href="php/view_community.php">View Community Color picks</a>
		</main>
		
		<footer>
	
		</footer>
	</body>
</html>