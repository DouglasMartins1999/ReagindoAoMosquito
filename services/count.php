<?php
	$xml = simplexml_load_file('../assets/weektips.xml');
	
	echo "Conteúdo: <br>";
	for($i=0;$i<=51;$i++){
		if(strlen($xml->note[$i]->label) > 120){
			echo $i+1 . " [".strlen($xml->note[$i]->label)."], ";
		}
	}
	echo "<br><br>Títulos: <br>";
	for($i=0;$i<=51;$i++){
		if(strlen($xml->note[$i]->title) > 30){
			echo $i+1 . " [".strlen($xml->note[$i]->title)."], ";
		}
	}
	echo "<br><br><b>Corretos:</b> <br>";
	for($i=0;$i<=51;$i++){
		if(strlen($xml->note[$i]->title) <= 30 && strlen($xml->note[$i]->label) <= 120){
			echo $i+1 . ", ";
		}
	}
	echo "<br><br><script>navigator.appVersion</script>";
?>