<?php
	require("db/connection.php");

	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$course = $_POST['course'];

	$query = "UPDATE records SET name='$name', age='$age', course='$course' WHERE id='$id'";
	mysqli_query($connection, $query);

?>