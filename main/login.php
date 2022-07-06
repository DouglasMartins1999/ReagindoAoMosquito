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
<link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
<link rel="stylesheet" href="/assets/styles/main.css" type="text/css">
<style>
	body {
		background:url('/assets/images/bg/<?php echo $set;?>.jpg');
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
				window.location = '/services/logout.php';
			}
			else{
				window.location = '/index.php';
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
			case "8":
				alert("Você precisa estar logado numa conta para acessar essa página. Ainda não possúi uma conta? Se inscreva agora mesmo!");
				break;
		}
	}
</script>
</head>
<body onLoad="logged();alertdata();">
	<div class="conreg black">
	<a href="/index.php"><img src="/assets/images/logo-small-light.png" style="margin:0 auto;display:block;text-align:center;"></a>
	</div>
	
<div class="conreg"> 
  <h1>Faça Login!</h1>
  <br>
  <form action="/helpers/process_login.php?url=<?php if(isset($_GET['url'])){echo $_GET['url'];}else{echo $_SERVER['PHP_SELF'];}?>" method="post" name="login_form" enctype="multipart/form-data" id="log" style="margin:0;">
    <input type="email" name="email" id="email" placeholder="Email"/>
    <br>
    <input type="password" name="password" id="password" placeholder="Senha"/>
    <br>
    <input type="button" value="Fazer Login" class="regbutton" onClick="verifylogin();"/>
  </form>
  <br>
  <div class="foots"> 
    <label>Esqueci a Senha: <a href="/main/passwordrecover.php" class="enter">Recuperar agora</a></label>
    <br>
    <label>Não possui conta? <a href="/main/register.php">Registre-se agora!</a></label>
  </div>
</div>
</body>
</html>
