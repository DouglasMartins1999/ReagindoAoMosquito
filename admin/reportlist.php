<?php session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
	
	include_once '../helpers/db_connect.php';
	$sql = "SELECT * FROM reports ORDER BY id DESC";
	$result = $mysqli->query($sql);
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
    <h1 style="margin-bottom:10px;">Lista de Denúncias</h1>
    <hr>
    <?php 
		if ($result->num_rows > 0) {
			// output data of each row
			$i = 1;
			while($row = $result->fetch_assoc()) {
				$fileimg = "/assets/images/reportimgs/" . $row["reportid"] . $row["filetype"];
				$text = $row["description"];
				$email = $row["mail"];
				$uname = $row["name"];
				$saw = $row["saw"];
				
				if(strlen($text)>=60){
					$content = substr($text,0,57) . "...";
				}
				else {
					$content = $text;
				}
				
				if($row["name"] == "false"){
					$made = "Denúncia enviada anonimamente";
				}
				else {
					$made = "<b>Nome:</b> " . $uname . "<br><b>Email:</b> " . $email;
				}
				
				if($saw == ""){
					$see = "<img src='/assets/images/admin/received.png' align='left'> Entregue";
					$colorsaw = "#888";
				}
				elseif($saw == "false"){
					$see = "<img src='/assets/images/admin/saw.png' align='left'> Visualizada";
					$colorsaw = "#059";
				}
				elseif($saw == "true"){
					$see = "<img src='/assets/images/admin/acepted.png' align='left'> Respondida";
					$colorsaw = "#090";
				}
				
				echo '<div class="report" style="border:5px solid '.$colorsaw.';"><a href="adminreport.php?id='.$row["reportid"].'"><img src="'.$fileimg.'" class="img" alt="'.$content.'"></a><br><div style="padding:10px;"><label><b>Descrição: </b>'.$content.'</label><br><label>'.$made.'</label><br><br><label style="color:'.$colorsaw.';">'.$see.'</label><br></div><div style="display:inline-block;width:100%;"><a class="bufiles" href="adminreport.php?id='.$row["reportid"].'">Visualizar Denúncia</a></div></div>';
				
				if($i == 4){
					echo '<div style="clear:both;"></div>';
					$i = 1;
				}
				else {
					$i++;
				}
			}
		}
		else {
			echo "Nenhuma denúncia foi registrada";
		}
	  ?>
	  <div style="clear:both;"></div>
  </div>
<div class="footer">
	<img src="/assets/images/admin/logo-small-dark.png">
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
