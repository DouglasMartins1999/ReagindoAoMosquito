<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	else {
		header('Location: /login.php?id=8&url='.$_SERVER['PHP_SELF']);
	}
	$xml = simplexml_load_file('includes/weektips/notifications.xml');
	$myfile = fopen("includes/weektips/position.txt", "r");
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
    <h1 style="margin-bottom:10px;">Se increva!</h1>
    <hr>
    <p style="margin-top:10px;">Agora você pode receber informações sobre como 
      combater o mosquito semanalmente direto no seu celular totalmente grátis! 
      Basta se inscrever abaixo para receber as notificações toda Quarta-Feira 
      e Sábado. Para mais informações, <a href="#">clique aqui.</a></p>
    <img src="img/compact.png" style="width:100%;max-width:400px;"><br>
    <label style="font-size:11px;top:10px;position:relative;">*Compatível apenas 
    com Android, com Chrome 42 ou superior ou Firefox 44 ou superior.</label>
    <br>
    <br>
    <br>
    <label id="valid"></label>
    <br>
    <br>
    <a class="button black" id="subscribe" href="https://pushpad.xyz/p/2972">Se 
    inscrever agora!</a> 
    <p></p>
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
<script src="js/compactibility.js" type="text/javascript"></script>
</body>
</html>
