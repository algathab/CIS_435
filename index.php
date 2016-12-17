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
?>


<html lang="en">
	<head>
		<title>Color Palette Generator</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/normalize.css" />
		<link rel="stylesheet" href="styles/main.css" />
		<script src="scripts/colorPicker.js"></script>
	</head>

	<body>
		<header>
			<h1>COLOR PALETTE GENERATOR</h1>
		</header>
		
		<main>
			<form method="get" action="index.php" id="colorForm" name="colorForm">
				<table>
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
							R: <input class="red" type="range" min="0" max="255" /> <span id="r1">0</span>
						</td>
						<td>
							R: <input class="red" type="range" min="0" max="255" /> <span id="r2">0</span>
						</td>
						<td>
							R: <input class="red" type="range" min="0" max="255" /> <span id="r3">0</span>
						</td>
						<td>
							R: <input class="red" type="range" min="0" max="255" /> <span id="r4">0</span>
						</td>
						<td>
							R: <input class="red" type="range" min="0" max="255" /> <span id="r5">0</span>
						</td>
					</tr>
					<tr class="slider">
						<td>
							G: <input class="green" type="range" min="0" max="255" /> <span id="g1">0</span>
						</td>
						<td>
							G: <input class="green" type="range" min="0" max="255" /> <span id="g2">0</span>
						</td>
						<td>
							G: <input class="green" type="range" min="0" max="255" /> <span id="g3">0</span>
						</td>
						<td>
							G: <input class="green" type="range" min="0" max="255" /> <span id="g4">0</span>
						</td>
						<td>
							G: <input class="green" type="range" min="0" max="255" /> <span id="g5">0</span>
						</td>
					</tr>
					<tr class="slider">
						<td>
							B: <input class="blue" type="range" min="0" max="255" /> <span id="b1">0</span>
						</td>
						<td>
							B: <input class="blue" type="range" min="0" max="255" /> <span id="b2">0</span>
						</td>
						<td>
							B: <input class="blue" type="range" min="0" max="255" /> <span id="b3">0</span>
						</td>
						<td>
							B: <input class="blue" type="range" min="0" max="255" /> <span id="b4">0</span>
						</td>
						<td>
							B: <input class="blue" type="range" min="0" max="255" /> <span id="b5">0</span>
						</td>
					</tr>
				</table>
				<br>
				<input class="button" id="submit" name="submit" type="submit" value="Save Pallette">
				<input class="button" id="random" name="random" type="button" value="Random Palette">
				<button class="button" id="community" name="community"><a href="php/view_community.php">View Community Palettes</a></button>	
			</form>
			
			<!--<?php 
				if (isset($_GET['submit']))
				{
					echo "<br><br>";
					echo "<br>";
					require ('php/insert.php');
				} 
				else 
				{
					echo "<p>Not Inserted</p>";
				} 
			?> -->
		</main>
		
		<footer>
	
		</footer>
	</body>
</html>