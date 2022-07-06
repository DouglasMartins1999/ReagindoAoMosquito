<?php 
	session_start();
	
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}

	$xml = simplexml_load_file('../../assets/weektips.xml');
	$myfile = fopen("../../helpers/weektips/used.txt", "r");
	$include = fread($myfile,1000);
	$dataN = explode(";",$include);
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
    <h1 style="margin-bottom:10px;">Galeria</h1>
    <hr>
    <p style="margin-top:10px;">Compartilhe as dicas do <b>Reagindo ao Mosquito</b> 
      para seus amigos e familiares, e ajude-nos a combater esse pequeno oponente!</p>
    <img src="/assets/images/gallery/gallery01.jpg" class="galleryimg"> <img src="/assets/images/gallery/gallery02.jpg" class="galleryimg"> 
    <img src="/assets/images/gallery/gallery03.jpg" class="galleryimg"> 
    <?php 
	  	foreach($dataN as $id){
			$id = intval($id);
			echo '<a href="/main/content/galleryimgs.php?id='.$xml->note[$id]->img.'I'.$id.'"><img src="/assets/images/weektips/'.$xml->note[$id]->img.'.jpg" class="galleryimg" alt="'.$id.'"></a>';
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
<?php require('../../helpers/footer.php');?>
</body>
</html>
