<?php
	$email = $_POST['email'];
	$code = mt_rand(1000000,9999999);
	$md5 = hash('md5', $code);

	include_once '../helpers/db_connect.php';

	$data = "SELECT * FROM users WHERE email = '$email'";
	$result = $mysqli->query($data);
			
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$user = $row['user'];
			$sql = "INSERT INTO passrecover (mail, code)
			VALUES ('$email', '$md5')";
			if ($mysqli->query($sql) === TRUE){
				header('Location: ' . $_ENV["BASE_URL"] . '/passmail.php?name='.$user.'&email='.$email.'&code='.$code);
			}
		}
	}
	
?>