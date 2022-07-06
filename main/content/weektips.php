<?php 
	session_start();

	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	
	$xml = simplexml_load_file('../../assets/weektips.xml');
	$myfile = fopen("../../helpers/weektips/position.txt", "r");
	$numberdata = fread($myfile,2);
	$dataN = intval($numberdata);
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require('../../assets/pages/header.htm');?>
<script type='text/javascript' src='/assets/scripts/main.js'></script>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('../../helpers/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;">#DicaDaSemana: 
      <?php echo $xml->note[$dataN]->title;?>
    </h1>
    <hr>
    <p style="margin-top:10px;">
      <?php if($xml->note[$dataN]->notify != ""){echo $xml->note[$dataN]->notify;}else{echo $xml->note[$dataN]->label;}?>
    </p>
    <img src="/assets/images/weektips/<?php echo $xml->note[$dataN]->img;?>.jpg" class="tipimg"> 
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
