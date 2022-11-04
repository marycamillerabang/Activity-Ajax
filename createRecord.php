<?php
	require("db/connection.php");

	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$course = $_POST['course'];

	$query = "INSERT INTO records VALUES ($id, '$name', '$age', '$course')";
	mysqli_query($connection, $query);

?>
