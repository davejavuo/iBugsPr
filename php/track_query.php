<?php 
	require 'connectdb.php';

	$r1 = pg_query($dbconn, 'INSERT INTO tracking VALUES (201610, 10, 1, 'In Progress')');
	if(!$r1) {
      $errormessage = pg_last_error();
      echo "Error with query: ". $errormessage;
      exit();
    }

?>