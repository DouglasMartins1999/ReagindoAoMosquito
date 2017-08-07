<?php
	$bg = ["bac1", "regbg1", "regbg2", "regbg3", "regbg4", "regbg5"];
	$set = $bg[array_rand($bg, 1)];
	session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
?>
<html>
<head>
<title>Registre-se - Reagindo ao Mosquito</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
<link rel="stylesheet" href="main.css" type="text/css">
<style>
	body {
		background:url('img/bg/<?php echo $set;?>.jpg');
		background-attachment:fixed;
		background-size: cover;
		background-position: center;
		margin:0;
		padding:0;
	}
	.conreg {
		height:auto;
		max-width:550px;
		width:100%;
		box-sizing:border-box;
		position:relative;
		background:rgba(255,255,255,0.7);
		margin:15px auto;
		border-radius:10px;
		border:1px solid #FFF;
		font-family:'Open Sans';
		font-size:1em;
		color:#333;
		padding:15px;
		text-align:center;
	}
	h1 {
		font-weight:300;
		margin:0;
	}
	input {
		background: #FFF;
		border-radius: 5px;
		border: 1px solid #09C;
		width: 100%;
		padding: 10px 15px;
		box-sizing: border-box;
		margin-bottom: 7px;
		font-family: 'Open Sans';
		font-weight:300;
		font-size: 14px;
	}
	.regbutton {
		margin: 0px;
		background: #369;
		color: #FFF;
		font-size: 16px;
		border: 1px solid #048;
		text-transform:uppercase;
	}
	.black {
		margin-top: 0;
		padding:10px 15px;
		border-radius: 0px 0px 10px 10px;
		background: rgba(0,0,0,0.5);
		border: 1px solid #000;
		border-top:0;
	}
	.foots {
		font-size:14px;
		text-align:left;
	}
	.foots a,
	.foots a:hover,
	.foots a:visited {
		color: #09C;
		text-decoration:none;
	}
</style>
<script type="text/javascript" src="js/verify.js"></script>
<script>
	function logged(){
		var session = <?php echo json_encode($_SESSION['login_string']);?>;
		if(session == null || session == false || session == ""){
		}
		else {
			show = confirm("<?php echo $user;?>, você já está logado. Deseja sair?");
			if(show == true){
				window.location = 'logout.php';
			}
			else{
				window.location = 'index.php';
			}
		}
	}
	function alertdata(){
		var id = <?php echo json_encode($_GET["id"]);?>;
		switch(id){
			case "1":
				alert("Esse email já foi registrado anteriormente");
				break;
			case "2":
				alert("As senhas não são iguais");
				break;
			case "3":
				alert("Olá, <?php echo $user;?>! Você foi logado com sucesso!!");
				break;
			case "4":
				alert("Parabéns, <?php echo $user;?>! Sua conta foi criada com sucesso!!");
				break;
			case "5":
				alert("O email inserido não foi registrado");
				break;
			case "6":
				alert("A senha inserida não está correta");
				break;
		}
	}
</script>
</head>
<body onLoad="logged();alertdata();">
	<div class="conreg black">
	<a href="index.php"><img src="img/logo%20page.png" style="margin:0 auto;display:block;text-align:center;"></a>
	</div>
	
<div class="conreg"> 
  <h1>Registre-se!</h1>
  <br>
  <form action="includes/process_regist.php" method="post" name="login_form" enctype="multipart/form-data" id="reg" style="margin:0;">
    <input type="text" name="username" id="nome" placeholder="Nome"/>
    <br>
    <input type="email" name="email" id="mail" placeholder="Email"/>
    <br>
    <input type="password" name="pass1" id="senha1" placeholder="Senha"/>
    <br>
    <input type="password" name="pass2" id="senha2" placeholder="Confirme a senha"/>
    <br>
    <input type="button" value="Registrar Agora" class="regbutton" onClick="verifyregister();"/>
  </form>
  <div class="foots" style="margin-top:5px;"> 
    <label>Já possui conta? <a href="login.php">Entrar agora!</a></label>
  </div>
</div>
</body>
</html>
