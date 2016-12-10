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
else{
	echo "not submitted";
}
 ?>

<html lang="en">
	<head>
		<title>COLOR PICKER</title>
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" href="styles/form.css" /> -->
	</head>

	<body>

		<h1>PICK COLORS</h1>

		<form method="get" action="index.php">
			<input type="color" id="color1" name="color1" value="<?php echo $color1; ?>">
			<input type="color" id="color2" name="color2" value="<?php echo $color2; ?>">
			<input type="color" id="color3" name="color3" value="<?php echo $color3; ?>">
			<input type="color" id="color4" name="color4" value="<?php echo $color4; ?>">
			<input type="color" id="color5" name="color5" value="<?php echo $color5; ?>">
			<input id="submit" name="submit" type="submit" value="submit">
		</form>

		<?php
if (isset($_GET['submit'])){
			echo "<br><br>";
			//var_dump($_GET);
			echo "<br>";
			require ('php/insert.php');
		} else {
			echo "<p>Not Inserted</p>";
		}
		?>

		<br>
		<a class="larger"  href="php/view_community.php">View Community Color picks</a>

	</body>

</html>