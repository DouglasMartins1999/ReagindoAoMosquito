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
    <h1 style="margin-bottom:10px;">+Informação!</h1>
    <hr>
    <p style="margin-top:10px;">Quer saber ainda mais sobre esse assunto, entrar em contato conosco ou fazer uma denúncia de um possível foco do mosquito? Então você está no lugar certo!</p>
	</div>
	<div class="den square" id="square1">
		<h1>Denúncia de Focos</h1>
    	<p>Conhece algum lugar que está apto a se tornar um criadouro do mosquito 
      da dengue? Há locais com lixo acumulado ou água parada em terrenos baldios 
      ou em vias públicas? Saiba que qualquer foco do mosquito é perigoso, e por 
      isso é necessário que você denuncie esses locais! Você também pode fazer 
      uma denúncia anônima. Começe agora!</p>
		<a href="/main/trashreport.php" class="button">Fazer uma Denúncia</a><br><br><br>
	</div>
	<div class="face square" id="square2">
		<h1>Página no Facebook</h1>
    	<p>Já conhece a nossa página no Facebook? Lá procuramos disseminar o máximo de
		informações sobre o mosquito <i>Aedes aegypti</i> e sobre as doenças dengue, zika 
		e chikungunya. Todas as nossas imagens estão disponíveis na página para você compartilhar
		com seus amigos e familiares. Aproveite!</p>
		<a href="https://www.facebook.com/reagindoaomosquito/" class="button">Acessar Página</a><br><br><br>
	</div>
	<div class="mail square" id="square3">
		<h1>Fale conosco</h1>
    	<p>Estamos de braços abertos para receber qualquer dúvida, crítica ou sugestão que vocês, nossos visitantes, 
		tem a oferecer! Vocês podem entrar em contato conosco pelo formulário que pode ser preenchido em nossa página de 
		contato. Para acessá-la, clique no botão abaixo.</p>
		<a href="/main/contact.php" class="button">Entrar em Contato</a><br><br><br>
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
