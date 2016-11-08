<?php
	// require '../php/startsess.php';
	require 'connectdb.php';

	$_SESSION['user'] = 123456789;
	$rs = pg_query($dbconn, "SELECT user_fname FROM users WHERE user_number = $_SESSION['user']");

	if(!$rs) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}else {
		$un = pg_fetch_result($rs, 0, 0);
		$_SESSION['username'] = $un;
	}

	$_SESSION['pr1'] = 201610;
	$_SESSION['pr2'] = 1;

?>