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
	
	function verifyreport(){
		if(document.getElementById("camera").value == "" && document.getElementById("files").value == ""){
			alert("Você precisa enviar uma imagem para fazer uma denúncia");
		}
		else {
			if(document.getElementById("desc").value == ""){
				alert("Você precisa inserir uma descrição para o problema");
			}
			else {
				if(document.getElementById("anon").checked == true){
					if(confirm("Tem certeza que você quer denunciar anonimamente?")){
						document.getElementById("report").submit();
					}
				}
				else {
					if(confirm("Tem certeza que você quer fazer essa denúncia?")){
						document.getElementById("report").submit();
					}
				}
			}
		}
	}
</script>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('includes/tags/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;">Denuncie!</h1>
    <hr>
    <p style="margin-top:10px;">Há locais públicos próximos a sua casa que podem acumular água? Há lixo se acumulando por ai? Saiba que você pode fazer uma denúncia desses locais para a Secretaria Municipal de Saúde diretamente do seu celular, aqui no site! Basta enviar uma foto do local e detalhar o caso nos campos abaixo que sua denúncia será avaliada o mais breve possível.</p>
	<p>Para nos ajudar a entrar em contato com você, por favor faça login em sua conta ou se registre, pois assim, o responderemos diretamente pelo email cadastrado. Mas caso queira, você também pode denunciar anonimamente marcando o campo abaixo e não coletaremos nenhum dado seu. Também não se esqueça de dizer qual a rua ou o local em que a foto foi tirada. Agradecemos sua colaboração, e juntos faremos uma cidade melhor!</p>
	<p></p>
	<form id="report" action="reportenter.php" enctype="multipart/form-data" method="post">
		<input name="anon" type="checkbox" id="anon" <?php if($not==true){echo 'disabled checked';}?>> Quero fazer uma denúncia anônima!
		<br><br>
		<input type="file" accept="image/*" capture="camera" name="camera" id="camera" class="inputfile" onchange="loadFile(event);hide('gallery','cam');">
		<label for="camera" class="bufiles mobile" id="cam"><img src="img/390.png" align="absmiddle" style="padding: 0px 10px;">Tirar Foto Agora</label>
		<br>
		<input type="file" name="files" id="files" class="inputfile" onchange="loadFile(event);hide('cam','gallery');">
		<label for="files" class="bufiles mobile" id="gallery"><img src="img/240.png" align="absmiddle" style="padding: 0px 10px;">Abrir da Galeria</label>
		<label for="files" class="bufiles pc" id="gallery"><img src="img/240.png" align="absmiddle" style="padding: 0px 10px;">Carregar Foto</label>
		<br><br>
		<img id="blah" src="#" alt="[Prévia da sua imagem]" style="width:calc(80% + 50px);"/><br><br>
		<textarea name="desc" id="desc" class="textar" placeholder="Informe o nome da rua ou fazenda e um ponto de referência. Detalhe o foco com o máximo de informações possíveis."></textarea><br>
		<input value="Denunciar Agora!" type="button" onClick="verifyreport();" class="button black" style="width: 80%;padding: 10px 25px;box-sizing: content-box;">
	</form>
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
