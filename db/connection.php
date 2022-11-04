<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="act";
$connection = new mysqli($servername, $username, $password, $db);
if(!$connection){
 die ("Error on the Connection" . $connection->connect_error);
}
?>
