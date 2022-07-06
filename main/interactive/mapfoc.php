<?php 
	include_once '../helpers/db_connect.php';
	$sql = "SELECT * FROM map";
	$result = $mysqli->query($sql);
	
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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="interact.min.js"></script>
<script src="jquery.min.js"></script>
<style>
	body {
		margin:0;
	}
	.boxcont {
		width:800px;
		height:480px;
		overflow:hidden;
	}
	.divmap {
		position:relative;
		background:url('/assets/images/Mapa%20Malhada.jpg');
		width:2900px;
		height:3249px;
	}
	.info {
		width: 250px;
		background:rgba(183, 183, 183, 0.5);
		position: absolute;
		z-index: 999;
		top: 10px;
		left: 10px;
		border: 1px solid #999;
		-webkit-transform: translateZ(0);
	}
	.spot {
		background: url('/assets/images/map/green.png');
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
		font-family: 'Open Sans', Sans-serif;
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
		width:400px;
		top:15px;
		right:15px;
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
		right: 0;
		width: 400px;
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
<link href="/assets/styles/tooltip.css" rel="stylesheet" type="text/css">
<script>
            var mydragg = function(){
                return {
                    move : function(divid,xpos,ypos){
                        divid.style.left = xpos + 'px';
                        divid.style.top = ypos + 'px';
                    },
                    startMoving : function(divid,container,evt){
                        evt = evt || window.event;
                        var posX = evt.clientX,
                            posY = evt.clientY,
                        divTop = divid.style.top,
                        divLeft = divid.style.left,
						eWi = parseInt(divid.style.width),
						eHe = parseInt(divid.style.height),
						cWi = parseInt(document.getElementById(container).style.width),
						cHe = parseInt(document.getElementById(container).style.height);
						document.getElementById(container).style.cursor='move';
                        divTop = divTop.replace('px','');
                        divLeft = divLeft.replace('px','');
                        var diffX = posX - divLeft,
                            diffY = posY - divTop;
                        document.onmousemove = function(evt){
                            evt = evt || window.event;
                            var posX = evt.clientX,
                                posY = evt.clientY,
                                aX = posX - diffX,
                                aY = posY - diffY;
								if (aX < -2100) aX = -2100;
								if (aY < -2769) aY = -2769;
								if (aX > 0) aX = 0;
								if (aY > 0) aY = 0;
								if (aX + eWi > cWi) aX = cWi - eWi;
								if (aY + eHe > cHe) aY = cHe -eHe;
                            mydragg.move(divid,aX,aY);
                        }
                    },
                    stopMoving : function(container){
                        var a = document.createElement('script');
						document.getElementById(container).style.cursor='default';
                        document.onmousemove = function(){}
			},
		}
	}();
	function position(top,left){
		lpos = -(left-document.getElementById("body").clientWidth/2);
		tpos = -(top-document.getElementById("body").clientHeight/2);
		document.getElementById("map").style.left = lpos;
		document.getElementById('map').style.top = tpos;
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
<body id="body">
<div class="boxcont" id="container">
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
	  
  <div class="divmap" id="map" onmousedown='mydragg.startMoving(this,"container",event);' onmouseup='mydragg.stopMoving("container");' style="top:-2160px;left:-1160px;"> 
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
				echo '<div class="spot tooltip" id="c'.$name.'" style="top:'.$top[$name].';left:'.$left[$name].';background:url('."'".'/assets/images/map/' . $flag[$name];
				if(!$accurate[$name]){
					echo '.png'."'".'), url('."'".'/assets/images/map/gray';
				}
				echo '.png'."'".')" onClick="more('.$name.');"><span class="tooltiptext">'.$rua[$name].'</span></div>';
			}
		?>
  </div>
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
