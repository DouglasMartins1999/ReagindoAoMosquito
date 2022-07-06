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
<?php require('../../assets/pages/header.htm');?>
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
<?php include('../../helpers/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <div class="main-frame-1">
		<?php
			if(isset($_GET["id"])){
				$id = $_GET["id"];
				include('../../assets/pages/articles/'.$id.'.htm');
			}
			else {
				echo '<h2>Página não encontrada</h2>
				<span class="subtitle">Desculpe-nos</span>
				<br>
				<p>Lamentamos informar, mas a página que você procura não existe ou está indisponível no momento</p>';
			}
		?>
	</div>
	<?php include('../../assets/pages/lateraldata.htm');?>
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
<?php require('../../helpers/footer.php');?>
</body>
</html>
