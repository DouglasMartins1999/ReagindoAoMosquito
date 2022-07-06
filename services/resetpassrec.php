<?php
	include_once '../helpers/db_connect.php';
	$del = "DELETE FROM passrecover";
	echo $del;
	if ($mysqli->query($del) === TRUE) {
		$sucess = "true";
	}
?>