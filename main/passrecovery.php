<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
		$email = $_SESSION['email'];
		$right = "true";
	}
	else {
		if($_GET['email'] != "" || $_GET['email'] != NULL){
			$code = hash('md5', $_GET['code']);
			$email = $_GET['email'];
			include_once '../helpers/db_connect.php';
			$sql = "SELECT * FROM users WHERE email = '$email'";
			$result = $mysqli->query($sql);
			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$user = $row['user'];
					
					$idsql = "SELECT * FROM passrecover WHERE mail = '$email'";
					$data = $mysqli->query($idsql);
					if ($data->num_rows > 0) {
						while($line = $data->fetch_assoc()){
							$recode = $line['code'];
							if($code == $recode){
								$right = "true";
							}
							else {
								$ok = "false";
							}
						}
					}
					else {
						$error = true;
					}
				}
			}
			else {
				header('Location: /index.php');
			}
		}
		else {
			$ok = "false";
		}
	}
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require('../assets/pages/header.htm');?>
<script type='text/javascript' src='/assets/scripts/main.js'></script>
<style>
	.input {
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
		max-width:300px;
	}
</style>
<script>
	function ValidateEmail(mail){
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    		return (true)
  		}
    	return (false)
		}
	function verifyemail(){
		//Campos
		var nome = document.getElementById("name").value
		var email = document.getElementsByName("email")[0].value
		var msg = document.getElementById("desc").value
		
		if(msg == "" || msg == null){
			alert("Por favor, escreva alguma mensagem");
		}
		else {
			if(document.getElementById("anon").checked == true){
				if(confirm("Tem certeza que você quer enviar essa mensagem anonimamente?")){
					document.getElementById("sendmail").submit();
				}
			}
			else {
				if(confirm("Tem certeza que você quer enviar essa mensagem?")){
					document.getElementById("sendmail").submit();
				}
			}
		}
	}
</script>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('../helpers/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;">Alterar Senha</h1>
    <hr>
    <p></p>
    <?php 
	  	if($right == "true"){
	  		echo "<form action='/main/passwordrecover.php' method='post'><label><b>Nome:</b> " . $user . "<br><a href='mailto:" . $email . "' class='enter'>" . $email . "</a><br><br><input name='pass1' id='pass1' type='password' required class='input' placeholder='Insira a nova senha'><br><input name='pass2' id='pass2' type='password' class='input' placeholder='Reinsira a senha' required><input name='email' type='hidden' value='" . $email . "'><input name='code' type='hidden' value='" .$_GET['code']. "'><br><br><input value='Enviar Mensagem' type='submit' class='bufiles' style='width: 80%;padding: 10px 25px;box-sizing: content-box;max-width:250px;'></label></form>";
		}
		elseif($ok == "false"){
			echo "Código Inválido";
		}
		elseif($error == true){
			echo "Infelizmente, esse código não é válido ou está fora da data de validade<br><br><a href='' class='enter'>Requisitar novo código</a>";
		}
	?>
  </div>
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
