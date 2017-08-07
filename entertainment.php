<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	else {
		$not = true;
	}
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require('includes/tags/tags.htm');?>
<?php include('includes/tags/jsfunctions.php');?>
<script>
	function height(){
		document.getElementById('square1').style.minHeight = document.getElementById('square1').clientWidth;
		document.getElementById('square2').style.minHeight = document.getElementById('square1').clientWidth;
		document.getElementById('square3').style.minHeight = document.getElementById('square1').clientWidth;
	}
</script>
</head>
<body onLoad="alertdata();modalsize();height();" onResize="modalsize();">
<?php include('includes/tags/header.php');?>
	
  <div class="content" align="center" style="background:#F5F5F5;padding:2% 10%;"> 
    <h1 style="margin-bottom:10px;">Entretenimento!</h1>
    <hr>
    <p style="margin-top:10px;">Aprender usando a tecnologia torna tudo mais divertido! 
      E esse é o motivo do "Reagindo ao Mosquito" existir. Confira abaixo nossas 
      opções para você se informar e se entreter ao mesmo tempo!</p>
  </div>
	<div class="interativa square" id="square1">
		<h1>Aprendizagem Interativa</h1>
		<p>Fique informado sobre o mosquito Aedes aegypti, quais seus hábitos, 
		as doenças transmitidas por ele, as formas de prevenção e outras informações 
		e curiosidades relevantes acerca do tema de maneira divertida e prática.
		Sabe como? Basta aproveitar de nossa Aprendizagem Interativa</p>
		<a href="interativa.php" class="button">Começar Agora</a><br><br><br>
	</div>
	<div class="maps square" id="square2" style="color:#333">
		<h1>Mapa de Focos</h1>
		<p>Quer saber a situação em que sua rua se encontra acerca dos casos, 
		suspeitas e focos do mosquito, sabia mais aqui!</p>
		<a href="focosmap.php" class="button black">Acessar Mapa</a>
	</div>
	<div class="quiz square" id="square3">
		<h1>Quiz: 120 por 12!</h1>
    	<p>Deseja testar seus conhecimentos a respeito do mosquito <i>Aedes aegypti</i> 
      e as doenças que são transmitidas por ele? Então aproveite nosso pequeno 
      cantinho próprio para isso!</p>
		<a href="120x12.php" class="button">Iniciar Agora</a>
	</div>
	<div style="clear:both;"></div>
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
