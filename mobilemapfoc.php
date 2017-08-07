<?php 
	$conn = new mysqli('HOST', 'USERNAME', 'PASSWORD', 'DBNAME');
	$sql = "SELECT * FROM map";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$id[] = $row["id"];
			$rua[] = $row["rua"];
			$casas[] = $row["domicilios"];
			$top[] = $row["toppos"];
			$left[] = $row["leftpos"];
			$casos[] = $row["casos"];
			$green[] = $row["verdes"];
			$yellow[] = $row["amarelos"];
			$red[] = $row["vermelhos"];
			$not[] = $row["semselo"];
		}
	}
?>
<html>
<head>
<title>Mapa de focos</title>
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no;minimum-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="interact.min.js"></script>
<script src="jquery.min.js"></script>
<style>
	body {
		margin:0;
	}
	.divmap {
		position:relative;
		background:url('img/Mapa%20Malhada.jpg');
		width:2900px;
		height:3249px;
	}
	.info {
		background:rgba(183, 183, 183, 0.5);
		position:fixed;
		z-index:999;
		bottom:0;
		left:0;
		border-top: 1px solid #999;
		-webkit-transform: translateZ(0);
		transform: translateZ(0);
	}
	.spot {
		background: url('img/map/green.png');
		width: 35px;
		height: 35px;
		position: absolute;
		left: 960px;
		top: 2105px;
		cursor:pointer;
	}
	.blockbox {
		margin: 15px;
		width: 220px;
		font-family: 'Open Sans';
		font-size: 15px;
	}
	.dom {
		text-align: center;
		color: #333;
		line-height: 35px;
		position: absolute;
		bottom: 10px;
		right: 15px;
	}
	.searchbar {
		height:40px;
		top:15px;
		left:15px;
		position:fixed;
		background:#FFF;
		z-index: 999;
		border: 0;
		box-shadow: 0px 0px 3px 0px;
		border-radius: 3px;
		padding: 15px;
		box-sizing: border-box;
	}
	.list {
		position:fixed;
		z-index:999;
		padding:0;
		margin:15px;
		margin-top:55px;
	}
	.list li {
		background:#FEFEFE;
		border:0.5px solid #EEE;
		padding:7px;
		text-decoration:none;
		display:block;
		font-family:'Open Sans';
		font-size:14px;
		color:#222;
	}
	.searchbutton {
		position:fixed;
		margin:15px;
		z-index:999;
		height:40px;
		float:right;
		right:0;
	}
</style>
<script>
	function setchanges(){
		document.getElementById("info").style.width = document.getElementById("body").clientWidth;
		document.getElementById("search").style.width = document.getElementById("body").clientWidth - 30;
		document.getElementById("list").style.width = document.getElementById("body").clientWidth - 30;
	}
	function scrollable(){
		window.scrollTo(1381, 2219);
	}
	function position(top,left){
		lpos = left-document.getElementById("body").clientWidth/2;
		tpos = top-document.getElementById("body").clientHeight/2;
		window.scrollTo(lpos,tpos);
	}
	function order() {
		// Declare variables
		var input, filter, ul, li, a, i;
		input = document.getElementById('search');
		filter = input.value.toUpperCase();
		ul = document.getElementById("list");
		li = ul.getElementsByTagName('li');
	
		ul.style.display = 'block';
		// Loop through all list items, and hide those who don't match the search query
		for (i = 0; i < li.length; i++) {
			a = li[i].getElementsByTagName("label")[0];
			if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
				li[i].style.display = "";
			} else {
				li[i].style.display = "none";
			}
		}
	}
	function dimiss(){
		ul = document.getElementById("list");
		input = document.getElementById('search');
		ul.style.display = 'none';
		input.value = '';
	}
</script>
</head>
<body onLoad="setchanges();scrollable();" onResize="setchanges();" id="body">
	<input class="searchbar" id="search" name="searchmap" type="text" placeholder="Pesquisar Ruas"><button onClick="order();" class="searchbutton">Pesquisar</button>
	<ul style="display:none;" class="list" id="list">
	<?php
		foreach($id as $name){
			$name-=1;
	  		echo '<li><label onClick="more('.$name.');position('.$top[$name].','.$left[$name].');dimiss();">'.$rua[$name].'</label></li>';
	  	}
	?>
	</ul>
	<div class="info" id="info" style="display:none;" onClick="out();">
		<div class="blockbox">
			<b><label id="ruaname"></label></b><br>
			Estado: <label id="status"></label><label id="notaccu" style="display:none;font-size:11px;color:#444;">(Dados Imprecisos)</label><br><br>
			<div class="dom"><label id="numberh" style="font-size:50px;font-weight:700;text-align:center;"></label><br>Domicílios</div>
			<font color="#009933"><b>Verde: </b> <label id="greenseal"></label></font><br>
			<font color="#937600"><b>Amarela: </b> <label id="yellowseal"></label></font><br>
			<font color="#990000"><b>Vermelha: </b> <label id="redseal"></label></font><br>
			<font color="#555"><b>Sem Selo:</b> <label id="noseal"></label></font>
		</div>
	</div>
	  
<div class="divmap" id="map" onClick="dimiss();"> 
  <?php
			foreach($id as $name){
				$name-=1;
				$redpercent = ($red[$name]/$casas[$name])*100;
				if($redpercent > 20){
					$flag[] = 'red';
				}
				else{
					$yellowpercent = ((2*$red[$name]+1*$yellow[$name]+0.5*$casos[$name])/$casas[$name])*100;
					if($yellowpercent > 50){
						$flag[] = 'yellow';
					}
					else {
						$flag[] = 'green';
					}
				}
				$notpercent = ($not[$name]/$casas[$name])*100;
				if($notpercent > 40){
					$accurate[] = false;
				}
				else {
					$accurate[] = true;
				}
				echo '<div class="spot" id="c'.$name.'" style="top:'.$top[$name].';left:'.$left[$name].';background:url('."'".'img/map/' . $flag[$name];
				if(!$accurate[$name]){
					echo '.png'."'".'), url('."'".'img/map/gray';
				}
				echo '.png'."'".')" onClick="more('.$name.');"></div>';
			}
		?>
</div>
</body>
<script>
	var id = <?php echo json_encode($id);?>;
	var rua = <?php echo json_encode($rua);?>;
	var casas = <?php echo json_encode($casas);?>;
	var top = <?php echo json_encode($top);?>;
	var left = <?php echo json_encode($left);?>;
	var casos = <?php echo json_encode($casos);?>;
	var green = <?php echo json_encode($green);?>;
	var red = <?php echo json_encode($red);?>;
	var yellow = <?php echo json_encode($yellow);?>;
	var flag = <?php echo json_encode($flag);?>;
	var accu = <?php echo json_encode($accurate);?>;
	var not = <?php echo json_encode($not);?>;
	
	function more(id){
		document.getElementById("info").style.display = "block";
		document.getElementById("ruaname").innerHTML = rua[id];
		document.getElementById("greenseal").innerHTML = green[id];
		document.getElementById("redseal").innerHTML = red[id];
		document.getElementById("yellowseal").innerHTML = yellow[id];
		document.getElementById("noseal").innerHTML = not[id];
		document.getElementById("numberh").innerHTML = casas[id];
		switch (flag[id]){
			case 'green':
				document.getElementById("status").innerHTML = 'Segura';
				document.getElementById("status").style.color = '#009933';
				break;
			case 'yellow':
				document.getElementById("status").innerHTML = 'Em Alerta';
				document.getElementById("status").style.color = '#937600';
				break;
			case 'red':
				document.getElementById("status").innerHTML = 'Sob Risco';
				document.getElementById("status").style.color = '#990000';
				break;
			default:
				break;
		}
		if(accu[id] == false){
			document.getElementById("notaccu").style.display = 'block';
		}
		else {
			document.getElementById("notaccu").style.display = 'none';
		}
	}
	function out(){
		document.getElementById("info").style.display = 'none';
	}
</script>
</html>
