<?php
	session_start();
	$id = hash("md5", mt_rand(1,999999999));
	$camera = $_FILES["camera"];
	$files = $_FILES["files"];
	$desc = $_POST["desc"];
	
	if(isset($_SESSION['username']) && isset($_POST["anon"])){
		$name = "false";
		$email = "false";
	}
	elseif(isset($_SESSION['username'])){
		$name = $_SESSION['username'];
		$email = $_SESSION['email'];
	}
	else {
		$name = "false";
		$email = "false";
	}
	
	include_once 'includes/db_connect.php';
	
	if(isset($camera)){
		$uploadfile = $camera;
	}
	elseif(isset($files)) {
		$uploadfile = $files;
	}
	$target_dir = "img/reportimgs/";
	$target_file = $target_dir . basename($uploadfile["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$uploadfile["name"] = $id . '.' . $imageFileType;
	$target_file = $target_dir . basename($uploadfile["name"]);
	
	if(isset($_POST["submit"])) {
		$check = getimagesize($uploadfile["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($uploadfile["size"] > 10000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} 
		else {
			if (move_uploaded_file($uploadfile["tmp_name"], $target_file)) {
				$filetype = "." . $imageFileType;
				$dsend = date("Y/m/d G:i:s");
				$sql = "INSERT INTO reports (reportid, filetype, description, mail, name, dsend)
				VALUES ('$id', '$filetype', '$desc', '$email', '$name', '$dsend')";
				if ($mysqli->query($sql) === TRUE) {
					
					require_once('includes/pushpad/init.php');
					Pushpad\Pushpad::$auth_token = 'YOUR TOKEN';
					Pushpad\Pushpad::$project_id = 1234;
					
					if(strlen($desc)>=120){
						$content = substr($desc,0,117) . "...";
					}
					else {
						$content = $desc;
					}
					$url = "http://reagindoaomosquito.ga/admin/adminreport.php?id=" . $id;
					$notification = new Pushpad\Notification(array(
					  'body' => $content, # max 120 characters
					  'title' => 'Um novo foco foi registrado', # optional, defaults to your project name, max 30 characters
					  'target_url' => $url, # optional, defaults to your project website
					));
					$notification->broadcast();
					header("Location: report.php?id=$id");
				}	
				else {
					echo "Error: " . $sql . "<br>" . $mysqli->error;
				}
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
?>
