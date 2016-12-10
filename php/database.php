<?php
$server_name = 'mysql:host=localhost;dbname=color_picker';
$username = "someuser";
$password = "pa55word";

try{
	$conn = new PDO($server_name, $username, $password);
}
catch(PDOException $e){
	$error_message = $e->getMessage();
	echo "Couldn't connect to database: $error_message";
	exit();
}

?>