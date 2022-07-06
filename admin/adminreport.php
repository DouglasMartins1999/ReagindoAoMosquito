<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	
	if(!isset($_GET["id"])){
		header("Location: reportlist.php");
	}
	$md5id = $_GET["id"];
	
	include_once '../helpers/db_connect.php';
	
	$data1 = "SELECT * FROM reports WHERE reportid = '$md5id'";
	$result = $mysqli->query($data1);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$fileimg = "/assets/images/reportimgs/" . $md5id . $row["filetype"];
			$text = $row["description"];
			$email = $row["mail"];
			$uname = $row["name"];
			$saw = $row["saw"];
			$datesend = $row["dsend"];
			$regid = $row["id"];
			if($saw == "true"){
				$datesucess = $row["dsucess"];
			}
			
			if($saw == ""){
					$dsaw = date("Y/m/d G:i:s");
					$sql = "UPDATE reports SET saw='false', dsaw='$dsaw' WHERE reportid = '$md5id'";
					if ($mysqli->query($sql) === TRUE) {
						header("Location: adminreport.php?id=$md5id");
					}
			}
			elseif($saw == "false" && $_GET["n"] == "active") {
					$sucess = date("Y/m/d G:i:s");
					$sql = "UPDATE reports SET saw='true', dsucess='$sucess' WHERE reportid = '$md5id'";
					if ($mysqli->query($sql) === TRUE) {
						header("Location: adminreport.php?id=$md5id");
					}
			}
		}
	}
	else {
		header("Location: reportlist.php");
	}
	
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require('../assets/pages/header.htm');?>
<script type='text/javascript' src='/assets/scripts/main.js'></script>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('../helpers/header.php');?>
  <div class="content" align="center" style="background:#F5F5F5;" id="msg"> 
    <h1 style="margin-bottom:10px;max-width:100%;"> Denúncia #
      <?php echo $regid;?>
    </h1>
    <hr>
    <p class="reportadm"> <img src="<?php echo $fileimg;?>" class="reportimg"> 
    <div class="descr"> 
      <?php
		if($uname == "false"){
			echo "<b>Denúncia enviada anonimamente</b>";
		}
		else {
			echo "<b>Nome:</b> " . $uname . "<br><b>Email: </b><a href='mailto:" . $email . "?Subject=Denúncia%20feita%20à%20Secretaria%20Municipal%20de%20Saúde%20de%20Malhada%20de%20Pedras'>".$email."</a>";
		}
		echo "<br><b>Enviada em:</b> " . date_format(date_create($datesend), 'd/m/Y H:i') . " (Há " . date_diff(date_create($datesend), date_create())->format('%a dias e %h horas atrás)');
		if($saw == "true"){
		echo "<br><b>Concluída em:</b> " . date_format(date_create($datesucess), 'd/m/Y H:i') . " (" . date_diff(date_create($datesend), date_create($datesucess))->format('%a dias, %h horas e %i minutos após o recebimento)');
		}
		echo "<br><b>Descrição:</b> " . $text . "<br><br><br>";
		
		if($saw == "false"){
			echo "<a href='adminreport.php?id=$md5id&n=active' class='bufiles' style='text-decoration:none;text-align:center;'>Relatar resposta</a>";
		}
		elseif($saw == "true"){
			echo "<label style='color:#090;'>Denúncia Solucionada com Sucesso</label>";
		}
		echo "<br><br><a href='reportlist.php' class='bufiles' style='text-decoration:none;text-align:center;'>Voltar a página anterior</a>";
	?>
    </div>
    <div style="clear:both;"></div></p>
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
