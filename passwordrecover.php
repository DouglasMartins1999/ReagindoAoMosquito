<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
		$email = $_SESSION['email'];
	}
	else {
		$right = "true";
		if($_POST["pass1"] != "" || $_POST["pass1"] != NULL){
			$code = hash('md5', $_POST['code']);
			$email = $_POST['email'];
			$pass1 = $_POST["pass1"];
			$pass2 = $_POST["pass2"];
			
			include_once 'includes/db_connect.php';
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
							if($pass1 == $pass2){
								$p = hash('sha512', $pass1);
								$update = "UPDATE users SET password='$p' WHERE email = '$email'";
								if ($mysqli->query($update) === TRUE) {
									$del = "DELETE FROM passrecover WHERE mail = '$email'";
									if ($mysqli->query($del) === TRUE) {
										$sucess = "true";
									}
								}
							}
							else {
								$email2 = urlencode($email);
								$colde = $_POST['code'];
								header("Location: passrecovery.php?email=$email2&code=$colde&id=2");
							}
						}
					}
					else {
						$ok = "false";
					}
				}
			}
			else {
				header('Location: index.php');
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
<?php require('includes/tags/tags.htm');?>
<?php include('includes/tags/jsfunctions.php');?>
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
<?php include('includes/tags/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;">Alterar Senha</h1>
    <hr>
	<p<?php if($sucess == "true"){echo " style='display:none;'";}?>>Enviaremos uma mensagem para seu email para que você possa recuperar sua conta.</p>
    <p></p>
	<?php 
		if($sucess == "true"){
			echo "Sua senha já foi alterada com sucesso!<br><br><a href='index.php' class='enter'>Voltar a página inicial</a>";
		}
	  	elseif($right == "true"){
	  		echo "<form action='recoverpass.php' method='post'><input name='email' id='email' type='text' class='input' placeholder='Insira o email cadastrado no site' required><br><input value='Enviar Mensagem' type='submit' class='bufiles' style='width: 80%;padding: 10px 25px;box-sizing: content-box;max-width:250px;'></label></form>";
		}
	?>
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
