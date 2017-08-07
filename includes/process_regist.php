<?php
include_once 'db_connect.php';
session_start();
 
if (isset($_POST['email'], $_POST['pass1'], $_POST['pass2'], $_POST['username'])) {
    $email = $_POST['email'];
	$user = $_POST['username'];
    $pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	if ($pass1 == $pass2){
 		$p = hash('sha512', $pass1);
		echo $p;
	}
	else {
		// As senhas não são iguais
		header("Location: ../register.php?id=2");
	}
	
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		header("Location: ../register.php?id=1");
	}
	
	$sql = "INSERT INTO users (user, email, password)
	VALUES ('$user', '$email', '$p')";
	
	if ($mysqli->query($sql) === TRUE) {
		$user_browser = $_SERVER['HTTP_USER_AGENT'];
		$_SESSION['username'] = $user;
		$_SESSION['email'] = $email;
		$_SESSION['login_string'] = hash('sha512', $pass1 . " - " . $user_browser);
        header("Location: ../index.php?id=4");
	} 
	else {
		// Erro ao registrar login
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else {
    // As variáveis POST corretas não foram enviadas para esta página.
}
?>