<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");

	$server = $_GET["server"];
	$userid = $_GET["user"];
	$pwd = $_GET["pwd"];
	$dbName = $_GET["dbName"];

	$pwd = urldecode($pwd);

	$mysqli = new mysqli($server, $userid, $pwd, $dbName);
	if ($mysqli->connect_errno) {
		die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
	} 
	$mysqli->select_db($dbName) or die($mysqli->error);

	$username = $_GET["username"];
	$username = $mysqli->real_escape_string($username);

	$command = "DELETE FROM passwords WHERE username = '$username';";
	$result = $mysqli->query($command) or die($mysqli->error);

?>

	