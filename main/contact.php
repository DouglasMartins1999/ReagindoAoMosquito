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
	var loadFile = function(event) {
    var output = document.getElementById('blah');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  
	function hide(id,its){
		document.getElementById(id).style.color = "#999";
		document.getElementById(its).style.color = "#B4FFC2";
		document.getElementById(id).style.border = "1px solid #999";
		document.getElementById(its).style.border = "1px solid #093";
		document.getElementById(id).style.background = "#CCC";
		document.getElementById(its).style.background = "#21CE72";
		if(id == 'cam'){
			document.getElementById("camera").disabled = true;
			document.getElementById("files").disabled = false;
		}
		else {
			if(id == 'gallery'){
				document.getElementById("files").disabled = true;
				document.getElementById("camera").disabled = false;
			}
		}
	}
	
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
	function changeinfo(){
		document.getElementById('info').innerHTML = '<b>Nome:</b> <input name="name" id="name" type="text"> - <b>Email: </b> <input name="email" id="email" type="text">';
	}
</script>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('../helpers/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;">Fale Conosco</h1>
    <hr>
    <p style="margin-top:10px;">Estamos de braços abertos para receber qualquer 
      dúvida, crítica ou sugestão que vocês, nossos visitantes, tem a oferecer! 
      Vocês podem entrar em contato conosco pelo formulário que pode ser preenchido 
      abaixo.</p>
    <p></p>
    <form id="sendmail" action="/services/contact.php" method="post">
      <input name="anon" type="checkbox" id="anon" <?php if($not==true){echo 'disabled checked';}?>>
      Quero enviar uma mensagem anônima! <br>
      <br>
      <?php 
			if(isset($user)){
				echo "<label id='info'><b>Nome:</b> " . $user . " - <b>Email: </b>" . $_SESSION["email"] . " - <a class='enter' onClick='changeinfo();'>Quero Enviar com Informações diferentes</a><input name='name' id='name' type='hidden' value='" . $_SESSION["username"] . "'><input name='email' id='email' type='hidden' value='" . $_SESSION["email"] . "'></label> - ";
			}
			else {
				echo '<b>Nome:</b> <input name="name" id="name" type="text"> - <b>Email: </b> <input name="email" id="email" type="text"> - ';
			}
		?>
      <select name="type" id="type">
        <option>Dúvida</option>
        <option>Crítica</option>
        <option>Sugestão</option>
        <option>Outros</option>
      </select>
      <br>
      <br>
      <textarea name="desc" id="desc" class="textar" placeholder="Mensagem a ser enviada"></textarea>
      <br>
      <input value="Enviar Mensagem" type="button" onClick="verifyemail();" class="bufiles" style="width: 80%;padding: 10px 25px;box-sizing: content-box;">
    </form>
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
