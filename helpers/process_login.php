<?php
include_once 'db_connect.php';
session_start();
 
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // The hashed password.
 	$p = hash('sha512', $password);
	
	if(isset($_GET['url'])){
		$url = $_GET['url'];
	}
	
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["password"] == $p){
				$user_browser = $_SERVER['HTTP_USER_AGENT'];
				$_SESSION['username'] = $row["user"];
				$_SESSION['email'] = $email;
                $_SESSION['login_string'] = hash('sha512', $password . " - " . $user_browser . " - " . $row["id"]);
				if(isset($url)){
					header("Location: ..".$url."?id=3");
				}
				else {
					header("Location: ../index.php?id=3");
				}
			}
			else {
				if(isset($url)){
					header("Location: /main/login.php?id=6&url=".$url);
				}
				else {
					header("Location: /main/login.php?id=6");
				}
			}
		}
	}
	else {
		// Email incorreto ou inexist�nte
		if(isset($url)){
			header("Location: /main/login.php?id=5&url=".$url);
		}
		else {
			header("Location: /main/login.php?id=5");
		}
	}
}
else {
    // As vari�veis POST corretas n�o foram enviadas para esta p�gina.
	header("Location: /main/login.php");
}
?>