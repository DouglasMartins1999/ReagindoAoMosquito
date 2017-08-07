<?php
	//Check What Day Is Today
	$date = date("w");
	$hour = intvar(date("G"));
	$xml = simplexml_load_file('includes/weektips/notifications.xml');
	
	$myfile = fopen("includes/weektips/used.txt", "r");
	$include = fread($myfile,1000);
	$dataN = explode(";",$include);
	
	if(1 == 1){
		$id = mt_rand(0,51);
		foreach($dataN as $n){
			$n = intval($n);
			while($n == $id){
				$id = mt_rand(0,51);
				echo $id . " ";
			}
		}
	}
	elseif($date == "3" && $hour > 9 && $hour < 19){
		
	}
?>