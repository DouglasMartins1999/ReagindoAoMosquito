<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	
	if(!isset($_GET["id"])){
		header("Location: index.php");
	}
	$md5id = $_GET["id"];
	
	include_once 'includes/db_connect.php';
	$sql = "SELECT * FROM reports WHERE reportid = '$md5id'";
	$result = $mysqli->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$fileimg = "img/reportimgs/" . $md5id . $row["filetype"];
			$text = $row["description"];
			$email = $row["mail"];
			$uname = $row["name"];
			$saw = $row["saw"];
		}
	}
	else {
		header("Location: trashreport.php");
	}
	
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require('includes/tags/tags.htm');?>
<?php include('includes/tags/jsfunctions.php');?>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('includes/tags/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;max-width:100%;"> Denúncia #
      <?php echo $md5id;?>
    </h1>
    <hr>
    <p style="margin-top:10px;width:100%;"> <img src="<?php echo $fileimg;?>" class="tipimg" style="max-width:100%;"> 
      <?php
		if($uname == "false"){
			echo "Denúncia enviada anonimamente";
		}
		else {
			echo "<b>Denúncia enviada por " . $uname . "</b><br>Email: " . $email;
		}
		echo "<br><br><b>Descrição:</b> " . $text . "<br><br>";
		if($saw == ""){
			echo "Denúncia ainda não visualizada";
		}
		elseif($saw == "false"){
			echo "Denúncia visualizada pela Secretaria";
		}
		elseif($saw == "true"){
			echo "Denúncia avaliada e resolvida com sucesso";
		}
	?>
    </p>
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
