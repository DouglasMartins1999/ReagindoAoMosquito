<?php
	require_once('pushpad/init.php');

	// Auto Runned Script (by Cronjob)
	// It sends notifications weekly to subscribers

	$date = date("w");
	$hour = intval(date("G"));
	$xml = simplexml_load_file('../assets/weektips.xml');
	
	Pushpad\Pushpad::$auth_token = 'ea6108fe7c5c4c424c6bde3c92fe800c';
	Pushpad\Pushpad::$project_id = 2972;
	
	$myfile = fopen("../helpers/weektips/used.txt", "r");
	$include = fread($myfile,1000);
	$dataN = explode(";",$include);

	if($date == "6" && $hour >= 9 && $hour < 24){	
		echo "In Time " . date("G:i") . "<br>";
		$id = mt_rand(0,51);
		$stringid = strval($id);
		while(in_array($stringid,$dataN)){
			$id = mt_rand(0,51);
			$stringid = strval($id);
		}
		$title = strval($xml->note[$id]->title);
		$content = strval($xml->note[$id]->label);
		
		$notification = new Pushpad\Notification(array(
		  'body' => $content, # max 120 characters
		  'title' => $title, # optional, defaults to your project name, max 30 characters
		  'target_url' => $_ENV["BASE_URL"] . "/main/content/weektips.php", # optional, defaults to your project website
		));
		$notification->broadcast();
		echo "Notification Sended<br>";
		
		$myfile = fopen("../helpers/weektips/used.txt", "a+");
		$txt = $id . ";";
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "Used writed<br>";
		
		$myfile = fopen("../helpers/weektips/position.txt", "w");
		$txt = $id . ";";
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "Position writed<br>";
	}
	elseif($date == "3" && $hour >= 9 && $hour < 19){
		$id = mt_rand(0,51);
		$stringid = strval($id);
		while(in_array($stringid,$dataN) == false){
			$id = mt_rand(0,51);
			$stringid = strval($id);
		}
		$title = strval($xml->note[$id]->title);
		$content = strval($xml->note[$id]->label);
		$img = strval($xml->note[$id]->img);
		
		$notification = new Pushpad\Notification(array(
		  'body' => $content, # max 120 characters
		  'title' => $title, # optional, defaults to your project name, max 30 characters
		  'target_url' => $_ENV["BASE_URL"] . "/main/content/galleryimgs.php?id=" . $img . "I" . $id, # optional, defaults to your project website
		));
		$notification->broadcast();
		echo "Notification Sended<br>";
	}
?>