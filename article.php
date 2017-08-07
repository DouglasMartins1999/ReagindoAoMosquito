<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Reagindo ao Mosquito - O Combate Começa se Informando</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open Sans:400,500,300' rel='stylesheet' type='text/css'>
<link href="sheets.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="topbar">
		
  <div class="contentop"> <a href="index.htm"><img src="img/logo%20page.png" class="logotop"></a> 
    &nbsp; |&nbsp;&nbsp; <a href="article.php?id=01">Doenças</a> - <a>Divulgação</a> - <a>Entreter</a> 
    - <a>+Info</a> - <a>Contato</a></div>
	</div>
	
<div class="header"> 
  <div class="headtitle">O Combate Começa<br>
    se Informando...</div>
</div>
	
<div class="maindata">
<div class="main-frame-1">
		<?php
			if(isset($_GET["id"])){
				$id = $_GET["id"];
				include('articles/'.$id.'.htm');
			}
			else {
				echo '<h2>Página não encontrada</h2>
				<span class="subtitle">Desculpe-nos</span>
				<br>
				<p>Lamentamos informar, mas a página que você procura não existe ou está indisponível no momento</p>';
			}
		?>
	</div>
	<?php include('lateral.htm');?>
</div>
	
<div class="footer"> 
  <div class="contentop"> <a href="index.htm"><img src="img/logo%20page.png" class="logotop"></a> 
    <div align="right" style="margin-right:6%;">&copy;2016 - Todos os Direitos 
      Reservados</div>
  </div>
</div>
</body>
</html>
