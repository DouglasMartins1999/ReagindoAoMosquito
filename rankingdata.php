<?php
	$user = $_POST['user'];
	$value = $_POST['points'];
	$date = date('Y/m/d');
	
	include_once 'includes/db_connect.php';
	
	if(isset($user) && $user != "" && $user != null){
		if($value > 0){
			$sql = "INSERT INTO qrank (user, points, senddate)
				VALUES ('$user', '$value', '$date')";
			if ($mysqli->query($sql) === TRUE){}
		}
	}
	
?>