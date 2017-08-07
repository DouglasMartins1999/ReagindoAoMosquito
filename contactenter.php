<?php
	session_start();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$type = $_POST['type'];
	$msg = $_POST["desc"];
	
	if(isset($name) && isset($_POST["anon"])){
		$name = "false";
		$email = "false";
	}
	elseif(isset($name)){
		$name = $_POST['name'];
		$email = $_POST['email'];
	}
	else {
		$name = "false";
		$email = "false";
	}
	
	include_once 'includes/db_connect.php';

	$sql = "INSERT INTO messages (name, email, type, msg)
			VALUES ('$name', '$email', '$type', '$msg')";
			if ($mysqli->query($sql) === TRUE){
				header('Location: http://reagindoaomosquito.pe.hu/sendmail.php?name='.$name.'&email='.$email.'&type='.$type.'&desc='.$msg);
			}	
			else {
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
?>