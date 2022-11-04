<?php
	require("db/connection.php");

	$id = $_GET['id'];
	$query = "DELETE FROM records WHERE id = $id";
	mysqli_query($connection, $query);

?>