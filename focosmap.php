﻿<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
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
  <div class="content" align="center" style="background:#F5F5F5;"> 
    <h1 style="margin-bottom:10px;">Mapa de Casos</h1>
    <hr>
    <p style="margin-top:10px;">Saiba como está a situação da sua rua navegando 
      pelo mapa abaixo.</p>
    <br>
	<a class="mobile" href="#map">Clique para alinhar</a>
    <iframe src="mapfoc.php" frameborder="0" scrolling="no" width="800" height="480" align="middle" class="pc"></iframe>
  </div>
  <iframe src="mobilemapfoc.php" class="mobile" style="height:100%;width:100%;" frameborder="0" id="map"></iframe>
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