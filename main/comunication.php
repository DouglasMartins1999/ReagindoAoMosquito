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
<?php require('../assets/pages/header.htm');?>
<script type='text/javascript' src='/assets/scripts/main.js'></script>
<script>
	function height(){
		document.getElementById('square1').style.minHeight = document.getElementById('square1').clientWidth;
		document.getElementById('square2').style.minHeight = document.getElementById('square1').clientWidth;
		document.getElementById('square3').style.minHeight = document.getElementById('square1').clientWidth;
	}
</script>
</head>
<body onLoad="alertdata();modalsize();height();" onResize="modalsize();">
<?php include('../helpers/header.php');?>
	<div class="content" align="center" style="background:#F5F5F5;padding:2% 10%;"> 
    <h1 style="margin-bottom:10px;">Comunicação!</h1>
    <hr>
    <p style="margin-top:10px;">Ninguém combate o mosquito sozinho! Por isso, 
      o "Reagindo ao Mosquito" preparou uma coletânea de ferramentas que podem 
      te ajudar na tarefa de se prevenir e compartilhar com os amigos informações 
      úteis pelas redes sociais. Confira!</p>
	</div>
	<div class="notify square mobile" id="square2">
		<h1>Notificações Push</h1>
		<p>Você pode receber em seu celular semanalmente, dicas de como se prevenir
		contra o vetor das doenças dengue, zika e chikungunya, informações úteis sobre 
		o Aedes aegypti e lembretes sobre sua tarefa de se prevenir. Assim você aprende mais 
		sobre como combater o mosquito e ainda se lembra de por as coisas em ordem!
		 E o melhor, é totalmente gratuito! Basta se inscrever no site e começar a aproveitar!</p>
		<a href="/main/subscribe.php" class="button">Se inscrever agora</a><br><br><br>
	</div>
	<div class="gallery square" id="square1">
		<h1>Galeria de Imagens</h1>
		<p>Quem ama sempre quer bem! Por isso, reservamos imagens para você compartilhar
		em suas redes sociais com seus amigos e ajudá-los a se prevenir e manter o mosquito
		longe da cidade! Faça Malhada de Pedras uma cidade mais solidária! Aproveite pois 
		toda semana tem imagem nova!</p>
		<a href="/main/content/gallery.php" class="button">Acessar Galeria</a><br><br><br>
	</div>

	<div style="clear:both;"></div>
<div class="footer">
	<img src="/assets/images/logo-small-dark.png">
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
<?php require('../helpers/footer.php');?>
</body>
</html>
