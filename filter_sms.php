<?php
	$conn = new mysqli("localhost","root","","my-sms");
	require_once 'database.php';
	// print_r($_POST);
	$result = sms($conn, "select * from ")
?>