<?php
	$date = date("w");
	$hour = intval(date("G"));
	$xml = simplexml_load_file('includes/weektips/notifications.xml');
	
	require_once('pushpad/init.php');
	Pushpad\Pushpad::$auth_token = 'YOUR OWN TOKEN';
	Pushpad\Pushpad::$project_id = 1234;
	
	$myfile = fopen("includes/weektips/used.txt", "r");
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
		  'target_url' => "http://reagindoaomosquito.ga/weektips.php", # optional, defaults to your project website
		));
		$notification->broadcast();
		echo "Notification Sended<br>";
		
		$myfile = fopen("includes/weektips/used.txt", "a+");
		$txt = $id . ";";
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "Used writed<br>";
		
		$myfile = fopen("includes/weektips/position.txt", "w");
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
		  'target_url' => "http://reagindoaomosquito.ga/galleryimgs.php?id=" . $img . "I" . $id, # optional, defaults to your project website
		));
		$notification->broadcast();
		echo "Notification Sended<br>";
	}
?>
