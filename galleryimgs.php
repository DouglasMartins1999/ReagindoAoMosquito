<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	if(!isset($_GET['id'])){
		header("Location: ../gallery.php");
	}
	$xml = simplexml_load_file('includes/weektips/notifications.xml');
	$dataN = explode('I',$_GET['id']);
	$id = intval($dataN[1]);
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $xml->note[$id]->title;?> - Reagindo ao Mosquito" />
<meta property="og:description" content="<?php if($xml->note[$id]->notify != ""){echo $xml->note[$id]->notify;}else{echo $xml->note[$id]->label;}?>" />
<meta property="og:image" content="http://reagindoaomosquito.ga/includes/weektips/images/<?php echo $dataN[0];?>.jpg" />
<?php require('includes/tags/tags.htm');?>
<?php include('includes/tags/jsfunctions.php');?>
<script>
	function url(){
		document.getElementById('url').href = 'whatsapp://send?text=<?php echo $xml->note[$id]->title;?> - ' + window.location;
	}
</script>
</head>
<body onLoad="alertdata();modalsize();url();" onResize="modalsize();">
<?php include('includes/tags/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;">
      <?php echo $xml->note[$id]->title;?>
    </h1>
    <hr>
    <p style="margin-top:10px;"> 
      <?php if($xml->note[$id]->notify != ""){echo $xml->note[$id]->notify;}else{echo $xml->note[$id]->label;}?>
    </p>
    <img src="includes/weektips/images/<?php echo $dataN[0];?>.jpg" class="tipimg"> 
	<br>
	<a href="" id="url" data-action="share/whatsapp/share" class="sharebutton mobile">Compartilhar via Whatsapp</a><label class="mobile"><br></label>
	  <a href="https://www.facebook.com/sharer/sharer.php?u=http://reagindoaomosquito.ga/galleryimgs.php?id=<?php echo $_GET['id'];?>" style="border: 1px solid #333E66;background: #4064A2;" class="sharebutton" target="_blank">Compartilhar no Facebook</a>
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
