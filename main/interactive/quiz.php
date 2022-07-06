<?php
	session_start();
	$background = range(1, 12);
	shuffle($background);
	$colorsbg = array('#E74B3C', '#FBB44C', '#17A086', '#2A80B9');
	$colorbg = array('#871C10', '#885302', '#0A473A', '#123852');
	$xml = simplexml_load_file('../../assets/quests.xml');
	$xid = range(0, 16);
	shuffle($xid);
	$ans = range(0, 3);
	shuffle($ans);
?>
<html>
<head>
<title>120 por 12 - Responda perguntas e veja quão avançado está seu conhecimento</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet"> 
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png"/>
<style>
body {
	margin:0;
	padding:0;
	font-family:'Open Sans';
	color:#FFF;
}
.cont {
	width:100%;
	height:100%;
	position:relative;
	top:0;
	left:0;
	z-index:998;
}
.home {
	background:url('/assets/images/quiz/pc/bg.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
}
.bg0 {
	background:url('/assets/images/quiz/bg/<?php echo $background[0];?>.jpg');
}
.bg1 {
	background:url('/assets/images/quiz/bg/<?php echo $background[1];?>.jpg');
}
.bg2 {
	background:url('/assets/images/quiz/bg/<?php echo $background[2];?>.jpg');
}
.bg3 {
	background:url('/assets/images/quiz/bg/<?php echo $background[3];?>.jpg');
}
.bg4 {
	background:url('/assets/images/quiz/bg/<?php echo $background[4];?>.jpg');
}
.bg5 {
	background:url('/assets/images/quiz/bg/<?php echo $background[5];?>.jpg');
}
.bg6 {
	background:url('/assets/images/quiz/bg/<?php echo $background[6];?>.jpg');
}
.bg7 {
	background:url('/assets/images/quiz/bg/<?php echo $background[7];?>.jpg');
}
.bg8 {
	background:url('/assets/images/quiz/bg/<?php echo $background[8];?>.jpg');
}
.bg9 {
	background:url('/assets/images/quiz/bg/<?php echo $background[9];?>.jpg');
}
.bg10 {
	background:url('/assets/images/quiz/bg/<?php echo $background[10];?>.jpg');
}
.bg11 {
	background:url('/assets/images/quiz/bg/<?php echo $background[11];?>.jpg');
}
.ask {
	background-repeat:no-repeat;
	background-size:cover;
	background-position:top;
}
.logo {
	margin:70px 60px;
	position:relative;
	max-width:300px;
}
.sitelogo {
	max-width:300px;
	width:60%;
	margin:7% 0;
	left:50%;
	display:block;
	bottom:2%;
	position:fixed;
	transform:translate(-50%, 0);
}
.beginbutton {
	position: relative;
	top: 5%;
	left: 0;
	border: 0;
	width: 100%;
	padding: 15px;
	font-family: 'Open Sans';
	font-size: 16px;
	background: #FFFFFFE6;
	color: #444;
	text-transform: uppercase;
	font-weight: 600;
	display: block;
	border-top:1px solid #BBB;
}
.info {
	width: 80%;
	margin: 10%;
	background: rgba(255,255,255,0.9);
	padding: 20px;
	box-sizing:border-box;
	border-radius: 10px;
	border: 1px solid rgba(255,255,255,0.9);
	color:#333;
}
.none {
	display: none;
}
.countdown {
    top: 0;
    width: 15%;
    right: 0;
    position: fixed;
    z-index: 999;
    font-size: 30px;
    color: #555;
    font-family: 'Open Sans';
    padding: 9px 15px;
    border-radius: 0px 0px 0px 10px;
    background: rgba(255,255,255,0.8);
    font-weight: 700;
    border-left: 1px solid #FFF;
    border-bottom: 1px solid #FFF;
    text-align: center;
}
.menu {
    top: 0;
    width: 110px;
    left: 0;
    position: fixed;
    z-index: 999;
    font-size: 30px;
    color: #555;
    font-family: 'Open Sans';
    padding: 10px;
    border-radius: 0px 0px 10px 0px;
    background: rgba(255,255,255,0.8);
    font-weight: 700;
    border-right: 1px solid #FFF;
    border-bottom: 1px solid #FFF;
    text-align: center;
}
.desc {
	font-weight: 300;
	font-size: 34px;
	background: rgba(0, 0, 0, 0.59);
	padding: 5%;
	color: #FFF;
	position: absolute;
	margin-top: 7%;
	width: 45%;
	padding-bottom: 255px;
}
.ans {
	position: relative;
	left: 0;
	border: 0;
	width: 100%;
	padding: 20px;
	font-family: 'Open Sans';
	font-size: 16px;
	text-align: left;
	min-height:105px;
}
.answers {
	position:absolute;
	bottom:0;
	right:0;
	width:45%;
}
.over {
	background:url('/assets/images/quiz/bgend.jpg');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover;
	background-position:center;
}
.finish {
	background:url('/assets/images/quiz/bgfinish.jpg');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover;
	background-position:center;
}
.high {
	background:url('/assets/images/quiz/bghigh.jpg');
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover;
	background-position:center;
}
.rightwrong {
	z-index: 999;
	position: absolute;
	width: 30%;
	top: 10%;
	left: 15%;
}
.homebuttons {
	width: 300px;
	position: absolute;
	top: 40%;
	right: 6%;
	border-left: 1px solid #BBB;
	border-right: 1px solid #BBB;
}
.topbar {
	width: 800px;
	background: #FFF;
	position: absolute;
	top: 0;
	z-index: 999;
	height: 54px;
	padding: 3px;
}
</style>
<script>
	function fullscreen(){
	elem = document.getElementById("quiz");
		if (elem.requestFullscreen) {
		  elem.requestFullscreen();
		} else if (elem.msRequestFullscreen) {
		  elem.msRequestFullscreen();
		} else if (elem.mozRequestFullScreen) {
		  elem.mozRequestFullScreen();
		} else if (elem.webkitRequestFullscreen) {
		  elem.webkitRequestFullscreen();
		}
	}
	function see(on,off){
		document.getElementById(on).style.display = 'block';
		document.getElementById(off).style.display = 'none';
	}
	function startcountdown(){
		seg = 120;
		count = setInterval(countdown, 1000);
		document.getElementById('count').style.display = 'block';
		document.getElementById('menu').style.display = 'block';
	}
	function countdown(){
		if(seg != 0){
			seg = seg - 1;
			document.getElementById("count").innerHTML = seg;
		}
		else {
			clearInterval(count);
			see('gOver','menu');
		}
	}
	var right = 0;
	var wrong = 0;
	function setanswer(xml,answer,quest){
		if(answer == 0){
			rw('right');
			right++;
		}
		else {
			rw('wrong');
			if(answer == 3){
				wrong++;
			}
		}
		
		if(quest == 12){
			clearInterval(count);
			errors = 12 - right;
			if(wrong > 0){
				value = ((right*right*right)/(wrong*0.5))*seg;
			}
			else {
				value = (right*right*right)*seg;
			}
			if(value < 0){
				value = 0;
			}
			document.getElementById("value").innerHTML = value;
			document.getElementById("points").value = value;
			document.getElementById("acertos").innerHTML = right;
			document.getElementById("erros").innerHTML = errors;
			document.getElementById('finish').style.display = 'block';
			document.getElementById('a12').style.display = 'none';
			document.getElementById('count').style.display = 'none';
			document.getElementById('menu').style.display = 'none';
			document.getElementById('formdata').submit();
		}
		else {
			var on = "a" + (quest+1);
			var off = "a" + quest;
			document.getElementById(on).style.display = 'block';
			document.getElementById(off).style.display = 'none';
		}
	}
	function tryagain(){
		location.reload();
	}
	function goBack(){
		history.back();
	}
	function highscore(){
		document.getElementById('high').style.display = 'block'
		var iframe = document.getElementById('ranking');
		iframe.contentWindow.location.reload();
	}
	function highscoreout(){
		document.getElementById('high').style.display = 'none'
	}
	function rw(object){
		document.getElementById(object).style.display = 'block';
		setTimeout(rwoff, 400);
		
	}
	function rwoff(){
		document.getElementById('right').style.display = 'none';
		document.getElementById('wrong').style.display = 'none';
	}
</script>
</head>
<body>
<div style="width:800px;height:480px;overflow:hidden;">
	<div class="home cont" id="home">
		<img src="/assets/images/quiz/pc/logo.png" class="logo" onClick="fullscreen();">
		<div class="homebuttons">
			<button class="beginbutton" onClick="startcountdown();see('a1','home');">Começar Agora</button>
			<button class="beginbutton" style="border-bottom:1px solid #AAA" onClick="see('info','home');">Saiba mais</button>
		</div>
	</div>
	<div class="home cont none" id="info">
		<br>
		<div class="info">
			<h1>O objetivo</h1>
			<p style="font-size:12px;">Teste seus conhecimentos nesse pequeno jogo de perguntas e respostas. Você 
			  terá 120 segundos (2 minutos) para responder perguntas aleatórias sobre 
			  o <i>Aedes aegypti</i> e as doenças que são transmitidas por ele e quebrar 
			  recordes de outros usuários. Quanto maior o número de acertos e menor o 
			  tempo que você conseguir completar as perguntas, maior será sua pontuação. 
			  No final, sua pontuação será registrada e você poderá compará-la com a de 
			  outros usuários. Faça seu melhor para manter seu nome em primeiro colocado 
			  enquanto testa seus conhecimentos e aprende mais sobre um assunto tão importante!</p>
		</div>
		<button class="beginbutton" style="position:absolute;" onClick="see('home','info');">Voltar ao início</button>
	</div>
	<div id="a1" class="bg0 ask cont none">
		<div class="desc">1. <?php echo $xml->quest[$xid[0]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[0];?>, <?php echo $ans[0];?>, 1)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[0]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[0];?>, <?php echo $ans[1];?>, 1)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[0]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[0];?>, <?php echo $ans[2];?>, 1)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[0]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[0];?>, <?php echo $ans[3];?>, 1)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[0]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a2" class="bg1 ask cont none">
		<div class="desc">2. <?php echo $xml->quest[$xid[1]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[1];?>, <?php echo $ans[0];?>, 2)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[1]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[1];?>, <?php echo $ans[1];?>, 2)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[1]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[1];?>, <?php echo $ans[2];?>, 2)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[1]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[1];?>, <?php echo $ans[3];?>, 2)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[1]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a3" class="bg2 ask cont none">
		<div class="desc">3. <?php echo $xml->quest[$xid[2]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[2];?>, <?php echo $ans[0];?>, 3)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[2]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[2];?>, <?php echo $ans[1];?>, 3)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[2]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[2];?>, <?php echo $ans[2];?>, 3)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[2]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[2];?>, <?php echo $ans[3];?>, 3)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[2]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a4" class="bg3 ask cont none">
		<div class="desc">4. <?php echo $xml->quest[$xid[3]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[3];?>, <?php echo $ans[0];?>, 4)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[3]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[3];?>, <?php echo $ans[1];?>, 4)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[3]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[3];?>, <?php echo $ans[2];?>, 4)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[3]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[3];?>, <?php echo $ans[3];?>, 4)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[3]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a5" class="bg4 ask cont none">
		<div class="desc">5. <?php echo $xml->quest[$xid[4]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[4];?>, <?php echo $ans[0];?>, 5)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[4]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[4];?>, <?php echo $ans[1];?>, 5)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[4]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[4];?>, <?php echo $ans[2];?>, 5)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[4]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[4];?>, <?php echo $ans[3];?>, 5)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[4]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a6" class="bg5 ask cont none">
		<div class="desc">6. <?php echo $xml->quest[$xid[5]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[5];?>, <?php echo $ans[0];?>, 6)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[5]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[5];?>, <?php echo $ans[1];?>, 6)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[5]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[5];?>, <?php echo $ans[2];?>, 6)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[5]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[5];?>, <?php echo $ans[3];?>, 6)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[5]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a7" class="bg6 ask cont none">
		<div class="desc">7. <?php echo $xml->quest[$xid[6]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[6];?>, <?php echo $ans[0];?>, 7)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[6]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[6];?>, <?php echo $ans[1];?>, 7)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[6]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[6];?>, <?php echo $ans[2];?>, 7)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[6]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[6];?>, <?php echo $ans[3];?>, 7)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[6]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a8" class="bg7 ask cont none">
		<div class="desc">8. <?php echo $xml->quest[$xid[7]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[7];?>, <?php echo $ans[0];?>, 8)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[7]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[7];?>, <?php echo $ans[1];?>, 8)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[7]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[7];?>, <?php echo $ans[2];?>, 8)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[7]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[7];?>, <?php echo $ans[3];?>, 8)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[7]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a9" class="bg8 ask cont none">
		<div class="desc">9. <?php echo $xml->quest[$xid[8]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[8];?>, <?php echo $ans[0];?>, 9)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[8]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[8];?>, <?php echo $ans[1];?>, 9)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[8]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[8];?>, <?php echo $ans[2];?>, 9)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[8]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[8];?>, <?php echo $ans[3];?>, 9)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[8]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a10" class="bg9 ask cont none">
		<div class="desc">10. <?php echo $xml->quest[$xid[9]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[9];?>, <?php echo $ans[0];?>, 10)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[9]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[9];?>, <?php echo $ans[1];?>, 10)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[9]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[9];?>, <?php echo $ans[2];?>, 10)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[9]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[9];?>, <?php echo $ans[3];?>, 10)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[9]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a11" class="bg10 ask cont none">
		<div class="desc">11. <?php echo $xml->quest[$xid[10]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[10];?>, <?php echo $ans[0];?>, 11)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[10]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[10];?>, <?php echo $ans[1];?>, 11)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[10]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[10];?>, <?php echo $ans[2];?>, 11)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[10]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[10];?>, <?php echo $ans[3];?>, 11)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[10]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div id="a12" class="bg11 ask cont none">
		<div class="desc">12. <?php echo $xml->quest[$xid[11]]->title;?></div>
		<div class="answers">
			<?php $setid = mt_rand(0,3);shuffle($ans);?>
			<button class="ans" onClick="setanswer(<?php echo $xid[11];?>, <?php echo $ans[0];?>, 12)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>a)</b> <?php echo $xml->quest[$xid[11]]->alt->a[$ans[0]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[11];?>, <?php echo $ans[1];?>, 12)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>b)</b> <?php echo $xml->quest[$xid[11]]->alt->a[$ans[1]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[11];?>, <?php echo $ans[2];?>, 12)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>c)</b> <?php echo $xml->quest[$xid[11]]->alt->a[$ans[2]];?></button>
			<button class="ans" onClick="setanswer(<?php echo $xid[11];?>, <?php echo $ans[3];?>, 12)" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>"><b>d)</b> <?php echo $xml->quest[$xid[11]]->alt->a[$ans[3]];?></button>
		</div>
	</div>
	<div class="cont over none" id="gOver" style="position:absolute;">
		<img src="/assets/images/quiz/gameover.png" class="logo" style="margin-top:17%;margin-bottom:5%" onClick="fullscreen();">
		<div class="info" style="margin-top:0;font-size:14px;width:35%">Infelizmente, você não conseguiu completar todas as perguntas antes do tempo acabar. Mas não desista! Tente novamente e aprimore seus conhecimentos.</div>
		<?php $setid = mt_rand(0,3);?>
		<div class="answers">
			<button class="ans" onClick="tryagain()" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>">Tentar novamente</button>
			<button class="ans" onClick="goBack()" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>">Sair do Quiz</button>
		</div>
	</div>
	<div class="cont finish none" id="finish">
		<img src="/assets/images/quiz/sucess.png" class="logo" style="margin-top:10%;margin-bottom:5%" onClick="fullscreen();">
		<div class="info" style="margin-top:0;font-size:14px;width:35%;">Sua pontuação:
			<h1 style="margin:0;font-size:3em" align="center" id="value"></h1>
			<div align="center"><label id="acertos"></label> acertos e <label id="erros"></label> erros.</div>
		</div>
		<?php $setid = mt_rand(0,3);?>
		<div class="answers" style="bottom:20%;">
			<button class="ans" onClick="tryagain()" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>">Tentar novamente</button>
			<button class="ans" onClick="highscore()" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>">Ver Highscore</button>
			<button class="ans" onClick="goBack()" style="background:<?php if($setid != 3){echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];$setid++;}else{echo $colorsbg[3] . ';color:' . $colorbg[3];$setid=0;}?>">Sair do Quiz</button>
		</div>
	</div>
	<div class="cont high none" id="high" style="position:absolute;">
		<img src="/assets/images/quiz/Highscores.png" class="logo" style="margin-top:10%;margin-bottom:5%" onClick="fullscreen();">
		<iframe frameborder="0" src="/main/interactive/ranking.php" style="width:100%;height:55%;margin-top:20px;" id="ranking"></iframe>
		<?php $setid = mt_rand(0,3);?>
		<div class="answers" style="top:50px;">
			<button class="ans" onClick="highscoreout()" style="background:<?php echo $colorsbg[$setid] . ';color:' . $colorbg[$setid];?>">Voltar</button>
		</div>
	</div>
	<div class="rightwrong none" id="right"><img src="/assets/images/quiz/res/right.gif" style="width:70%;margin:15%;"></div>
	<div class="rightwrong none" id="wrong"><img src="/assets/images/quiz/res/wrong.gif" style="width:70%;margin:15%;"></div>
	<div class="topbar none" id="menu">
		<div class="countdown none" id="count">120</div>
		<div class="menu">
			<img src="/assets/images/quiz/res/reload.png" style="width:40px;margin-left:4px;float:left;" onClick="tryagain()">
			<img src="/assets/images/quiz/res/exit.png" style="width:40px;margin-left:25px;float:left;" onClick="goBack()">
			<div style="clear:both;"></div>
		</div>
	</div>
	<form action="/services/rankquiz.php" method="post" target="frameform" id="formdata" style="position:absolute;top:0;">
	<input name="user" type="hidden" value="<?php echo $_SESSION["username"];?>">
	<input name="points" type="hidden" id="points">
	</form>
	<iframe id="frameform" name="frameform" style="position:absolute;top:0;"></iframe>
</div>
</body>
</html>
