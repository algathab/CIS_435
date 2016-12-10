<?php

require_once ('database.php');

$color1 = $_GET['color1'];
$color2 = $_GET['color2'];
$color3 = $_GET['color3'];
$color4 = $_GET['color4'];
$color5 = $_GET['color5'];

$nRows = $conn->query('select count(*) from color_set')->fetchColumn(); 
echo "Number of records in database: " . $nRows;

if($nRows >= 10){
	
	$queryDelete = "DELETE FROM color_set ORDER BY ID ASC LIMIT 1;";
	$deleteStatement = $conn -> prepare($queryDelete);
	$deleteStatement -> execute();
	$deleteStatement -> closeCursor();
}

$queryInsert = "INSERT INTO color_set 
(COLOR1, COLOR2, COLOR3, COLOR4, COLOR5)
VALUES 
(:color1, :color2, :color3, :color4, :color5)";

$insertStatement = $conn -> prepare($queryInsert);
$insertStatement -> bindValue(':color1', $color1);
$insertStatement -> bindValue(':color2', $color2);
$insertStatement -> bindValue(':color3', $color3);
$insertStatement -> bindValue(':color4', $color4);
$insertStatement -> bindValue(':color5', $color5);
$insertStatement -> execute();

echo "<p id='valid'>Insertion succesfull!</p>";
?>