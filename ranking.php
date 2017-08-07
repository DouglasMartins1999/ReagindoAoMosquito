<?php
	include_once 'includes/db_connect.php';
	$sql = "SELECT * FROM qrank ORDER BY points DESC LIMIT 50";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$users[] = $row["user"];
			$points[] = $row["points"];
			$senddate[] = $row["senddate"];
		}
	}
	$id = range(0, count($users)-1);
?>
<html>
<head>
<title>Ranking - Quiz: 120 por 12</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet"> 
<style>
	body {
		font-family:'Open Sans';
		margin:0;
	}
	.position {
		background: #FCFCFC;
		border-top: 1px solid #DDD;
		padding: 7px;
	}
	h1 {
		float: left;
		margin: 5px 15px;
	}
	h2 {
		font-weight:300;
		margin: 0;
	}
	h3 {
		font-weight:300;
		margin: 0;
		font-size: 14px;
	}
</style>
</head>
<body>
		<?php
			foreach($id as $x){
				$position = $x+1;
				echo '<div class="position"><h1>' . $position . 'º</h1>
				<h3>' . $users[$x] . ' - [' . $senddate[$x] . ']</h3>
				<h2>' . $points[$x] . '</h2>
				</div>
				';
			}
		?>
</body>
</html>
