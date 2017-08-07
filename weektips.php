<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	$xml = simplexml_load_file('includes/weektips/notifications.xml');
	$myfile = fopen("http://reagindoaomosquito.pe.hu/includes/weektips/position.txt", "r");
	$numberdata = fread($myfile,2);
	$dataN = intval($numberdata);
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require('includes/tags/tags.htm');?>
<?php include('includes/tags/jsfunctions.php');?>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('includes/tags/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;">#DicaDaSemana: 
      <?php echo $xml->note[$dataN]->title;?>
    </h1>
    <hr>
    <p style="margin-top:10px;">
      <?php if($xml->note[$dataN]->notify != ""){echo $xml->note[$dataN]->notify;}else{echo $xml->note[$dataN]->label;}?>
    </p>
    <img src="includes/weektips/images/<?php echo $xml->note[$dataN]->img;?>.jpg" class="tipimg"> 
  </div>
<div class="footer">
	<img src="img/logo%20page%20black.png">
	<div style="float: right; font-family: 'Segoe UI Light'; font-size: 17px;" class="pcfooter">
©2016 - <?php echo date("Y");?> - Reagindo ao Mosquito<br>
Todos os Direitos Reservados
	</div>
	<div class="mobilefooter"><br>
©2016 - <?php echo date("Y");?><br>Reagindo ao Mosquito<br>
Todos os Direitos Reservados
	</div>
</div>
</div>
<?php require('includes/tags/bottomscript.php');?>
</body>
</html>
