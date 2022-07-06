<?php 
	include "../assets/libraries/server/Mobile_Detect.php";

	$detect = new Mobile_Detect();

	if (!$detect->isMobile() && !$detect->isTablet()) {
		echo "<script>location.href='/index.php'</script>";
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png"/>
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<title>Combata o Mosquito ao mesmo tempo que se diverte!</title>
<style>
	body {
		margin:0;
		font-family:'PT Sans', sans-serif;
	}
	@font-face {
		font-family: TrendexLight;
		src: url('TrendexLightSSi.TTF');
	}
	@font-face {
		font-family: CocogoosePro;
		src: url('Cocogoose Pro.ttf');
	}
	@keyframes button {
		from {background:rgba(255,255,255,0.5);border:1px solid #FFF;}
		to {background:rgba(77,255,255,0.55);border:1px solid #4DFFFF;}
	}
	.header {
		background:url('/assets/images/ezgif-4-2e0a6995f5.gif'), url('http://rosalieledda.com/wp-content/uploads/2015/09/warmlowpoly2.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode: color-dodge;
		top:0;
		left:0;
		width:100%;
		height:100%;
		position:relative;
	}
	.star {
		width:80%;
		min-width:200px;
		height:auto;
		transform: translate(-50%,-50%);
		top:50%;
		left:50%;
		position:relative;
		text-align:center;
	}
	.star img {
		opacity:0.9;
		width:100%;
		height:auto;	
	}
	.fon1 {
		font-family:'TrendexLight';
		font-size:2.1em;
		font-weight:500;
		color:#660000;
		transform: translateY(-90%);
		top:50%;
		position:absolute;
		left:12%;
	}
	.fon2 {
		font-family:'CocogoosePro';
		font-size:2em;
		font-weight:500;
		color:#660000;
		transform: translateY(20%);
		top:50%;
		position:absolute;
		left:19%;
	}
	.fon3 {
		font-size:1em;
		font-weight:700;
		color:#660000;
		top:49%;
		position:absolute;
		left:19%;
	}
	.content {
		width:80%;
		height:auto;
		min-height:90%;
		background:#F0F0F0;
		top:0;
		left:0;
		padding:10%;
		color:#666;
	}
	.content p {
		text-align:justify;	
	}
	.contimg {
		width:80%;
		height:auto;
		display:block;
		margin:0 auto;
	}
	.content hr {
		border:0;
		height:1px;
		background:#CCC;
		margin-bottom:10%;
	}
	.content label {
		font-family:'CocogoosePro';
		font-size:2em;
		text-transform:uppercase;
		line-height:1.2;
	}
	.heading {
		width:100%;
		height:auto;
		top:0;
		left:0;
		position:relative;
	}
	.reacting {
		background:url('/assets/images/bg/bac1.jpg'), url('/assets/images/bg/how/blured1.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode: luminosity;
	}
	.ainterativa {
		background:url('/assets/images/bg/highlights.jpg'), url('/assets/images/bg/how/blured2.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode: luminosity;
	}
	.quiz {
		background:url('/assets/images/landpage/quiz.jpg'), url('/assets/images/bg/how/blured5.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode:overlay;
	}
	.map {
		background:url('/assets/images/landpage/maps.png'), url('/assets/images/bg/how/blured8.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode:multiply;
	}
	.learn {
		background:url('/assets/images/landpage/learn.jpg'), url('/assets/images/bg/how/blured3.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode:color-dodge;
	}
	.report {
		background:url('/assets/images/landpage/report.jpg'), url('/assets/images/bg/how/blured4.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode:overlay;
	}
	.social {
		background:url('/assets/images/landpage/redes.jpg'), url('/assets/images/bg/how/blured7.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode:hard-light;
	}
	.phone {
		background:url('/assets/images/landpage/phone.jpg'), url('/assets/images/bg/how/blured6.png');
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
		background-blend-mode:color-burn;
	}
	.bgcont {
		width:80%;
		height:auto;
		top:0;
		left:0;
		background:rgba(0,0,0,0.6);
		padding:20% 10%;
		text-align:center;	
	}
	.bgcont hr {
		border: 0; 
		height: 1px; 
		background-image: -webkit-linear-gradient(left, #FFFFFF00, #FFF, #FFFFFF00);
		background-image: -moz-linear-gradient(left, #FFFFFF00, #FFF, #FFFFFF00);
		background-image: -ms-linear-gradient(left, #FFFFFF00, #FFF, #FFFFFF00);
		background-image: -o-linear-gradient(left, #FFFFFF00, #FFF, #FFFFFF00);
	}
	.bgcont label {
		font-family:'TrendexLight';
		text-transform:uppercase;
		color:#FFF;
		font-size:2em;
		text-align:center;	
	}
	.bgcont a {
		padding:10px 20px;
		color:#FFF;
		background:rgba(255,255,255,0.5);
		border:1px solid #FFF;
		border-radius:5px;
		margin:5px;
		text-transform:uppercase;
		animation-name:button;
   		animation-duration:500ms;	
		animation-iteration-count:infinite;
		animation-direction: alternate;
		text-decoration:none;
		font-weight:300;
		text-shadow:0 0 0;
	}
	.modal {
		width:100%;
		height:100%;
		position:fixed;
		top:0;
		left:0;
		background:rgba(0,0,0,0.7);
		z-index:998;
		display:none;	
	}
	.videocontent {
		width:100%;
		transform:translate(-50%,-50%);
		top:50%;
		left:50%;
		position:fixed;
		z-index:999;
		display:none;
	}
	.videocontent video {
		width:100%;
	}
</style>
<script>
	function hide(){
		document.getElementById("video").style.display = "none";
		document.getElementById("vid").style.display = "none";
		document.getElementById("dataid").pause();
	}
	function show(id){
		switch(id) {
			case 'what':
				var url = "https://dl.dropboxusercontent.com/s/c1ce3fomgmrsgnc/WhoAre.mp4";
				break;
			case 'interativa':
				var url = "https://dl.dropboxusercontent.com/s/ucen3cvk54r21zr/AInterativa.mp4";
				break;
			case 'quiz':
				var url = "https://dl.dropboxusercontent.com/s/lbw8i7y2bkhvnow/Quiz.mp4";
				break;
			case 'map':
				var url = "https://dl.dropboxusercontent.com/s/s42de0hkwmxob2u/Maps.mp4";
				break;
			case 'report':
				var url = "https://dl.dropboxusercontent.com/s/tofg2e6jtdlrzc6/Report.mp4";
				break;
			default:
				break;
		} 
		document.getElementById("dataid").src = url;
		document.getElementById("video").style.display = "block";
		document.getElementById("vid").style.display = "block";
	}
</script>
</head>
<body>
	<div class="modal" id="video" onClick="hide()"></div>
    <div class="videocontent" id="vid">
        	<video src="https://dl.dropboxusercontent.com/s/ucen3cvk54r21zr/AInterativa.mp4" controls id="dataid">
    </div>
	<div class="header" id="tophead" draggable="true">
        <div class="star">
	        <img src="/assets/images/landpage/icon.png">
        </div>
    </div>
    <div class="content">
    	<img src="/assets/images/landpage/icons/reacting.png" class="contimg">
        <hr>
        <label>Por que estar aqui?</label>
        <p>
        Uma das grandes preocupações de todos atualmente são os casos de dengue, e possívelmente, de zika e de chikungunya. Para evitar que essas doenças cheguem ao nosso municipio, precisamos que todos colaborem ao combater o mosquito transmissor. O problema é que aprender sobre esses assuntos costuma ser cansativo para muitas pessoas - principalmente para os jovens - ou falta uma forma mais fácil de aprender. Por isso, temos uma excelente proposta aqui: Você aprende sobre como combater o mosquito, sem precisar sair do seu celular ou computador, que tal? E mais, você não precisa ler textos enormes, aqui está tudo resumido, basta você pegar poucos minutos do seu tempo para aprender. Quer saber como? Deslize a página para o lado.
        </p>
    </div>
    <div class="heading reacting">
    	<div class="bgcont">
        	<label>O combate começa se informando!</label>
            <hr>
            <br>
            <a onClick="show('what')">Ver o vídeo</a>
        </div>
    </div>
    <div class="content">
    	<img src="/assets/images/landpage/icons/ainterativa.png" class="contimg">
        <hr>
        <label>Aprendizagem Interativa</label>
        <p>
        Vamos concordar, ninguém gosta de ficar lendo textos e mais textos, né? Você começa a ler e logo já está caindo de sono e precisa ler tudo de novo pra entender o que tinha acabado de ler. Esse é o seu caso? Então estamos aqui pra ajudar. A "Aprendizagem Interativa" é o nome que batizamos nossa forma de aprender mais sobre um assunto (O Aedes aegypti no caso). Aqui, a informação é objetiva, só tem aquilo que você precisa aprender, e tudo numa interface gráfica legal e prática de estar. Você aprende com poucos cliques. Experimente! Sei que você vai gostar.
        </p>
    </div>
    <div class="heading ainterativa">
    	<div class="bgcont">
        	<label>Aprendizagem Interativa</label>
            <hr>
            <br>
            <a onClick="show('interativa')">Ver o vídeo</a><br><br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"]?>/main/interactive/interativa.php" target="_blank">Começar agora</a>
        </div>
    </div>
    <div class="content">
    	<img src="/assets/images/landpage/icons/quiz.png" class="contimg">
        <hr>
        <label>Quiz: Teste seus conhecimentos!</label>
        <p>Usou nossa Aprendizagem Interativa? Já tem um conhecimento sólido sobre esse assunto? Que tal colocá-los a prova com esse minigame em forma de quiz? Aqui você tem 120 segundos para responder 12 questões aleatórias sobre o mosquito. Quanto mais questões você responder corretamente em menos tempo, maior a sua pontuação. O que me diz de  você comparar seu conhecimento com seus colegas de classe e amigos pra ver quem tira a maior pontuação? Além disso, se você tiver um <a href="<?php echo $_ENV["BASE_URL"]?>/main/register.php">cadastro em nosso site</a>, sua pontuação ficará registrada em nosso sistema e os outros visitantes poderão ver que você já está por dentro do assunto, gostou?
        </p>
    </div>
    <div class="heading quiz">
    	<div class="bgcont">
        	<label>Teste seus conhecimentos sobre as doenças!</label>
            <hr>
            <br>
            <a onClick="show('quiz')">Ver o vídeo</a><br><br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"]?>/main/interactive/120x12.php" target="_blank">Começar agora</a>
        </div>
    </div>
    <div class="content">
    	<img src="/assets/images/landpage/icons/maps.png" class="contimg">
        <hr>
        <label>Mapa de Focos!</label>
        <p>Agora você já deve ter visto que o Aedes aegypti não é coisa que se brinque. Mas você sabia que tem muitas ruas em Malhada de Pedras que deram lugar ao mosquito ou tem a possibilidade de gerar um criadouro? Essa situação preocupante nos motivou a criar um mapa, com todos os locais que podem ter focos do mosquito. Quer saber se a sua rua está segura? Recomendo que acesse agora mesmo:
        </p>
    </div>
    <div class="heading map">
    	<div class="bgcont">
        	<label>Saiba qual o estado que está sua rua!</label>
            <hr>
            <br>
            <a onClick="show('map')">Ver o vídeo</a><br><br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"]?>/main/interactive/focosmap.php" target="_blank">Visitar Mapa</a>
        </div>
    </div>
    <div class="content">
    	<img src="/assets/images/landpage/icons/learnmore.png" class="contimg">
        <hr>
        <label>Saiba +</label>
        <p>Gosta de ir mais a fundo? Precisa de referências para fazer um trabalho de escola sobre esse assunto? Não se preocupe! Você está no lugar certo. Nós também disponibilizamos para os alunos, textos informativos com mais detalhes sobre o mosquito em si e as doenças transmitidas por ele. Possuem boas fontes e podem ser consultados por qualquer um. Quer aprender mais? Então não deixe de conferir!</p>
    </div>
    <div class="heading learn">
    	<div class="bgcont">
        	<label>Aprenda ainda mais!</label>
            <hr>
            <br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"]?>/articles.php?id=01" target="_blank">Visualizar Textos</a>
        </div>
    </div>
    <div class="content">
    	<img src="/assets/images/landpage/icons/report.png" class="contimg">
        <hr>
        <label>Mostre onde está o Aedes</label>
        <p>Nós do Reagindo ao Mosquito não ficamos só na teoria. Foram horas e horas batalhando juntos para que vocês tivessem acesso a esse conteudo. Porém nada disso seria útil sem a sua participação. Você já é independente! Então está na hora de partir pra luta. Conhece algum lugar que esteja com água parada? Lixo acumulado? Qualquer lugar que possa se tornar um foco do mosquito? Por favor, nos ajude a eliminar! Usando nossa página, envie uma foto do local com uma breve descrição do possível foco e onde ele está localizado, seja na cidade ou na zona rural. Sua denúncia será enviada diretamente para a Secretaria Municipal de Saúde e eles farão a vistoria assim que possível. É juntos que iremos cuidar de nossa cidade!</p>
    </div>
    <div class="heading report">
    	<div class="bgcont">
        	<label>Denúncia de Focos!</label>
            <hr>
            <br>
            <a onClick="show('report')">Ver o vídeo</a><br><br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"]?>/main/trashreport.php" target="_blank">Quero Denunciar!</a>
        </div>
    </div>
    <div class="content">
    	<img src="/assets/images/landpage/icons/socialnetworks.png" class="contimg">
        <hr>
        <label>Divulgue nosso conteúdo!</label>
        <p>Combater o mosquito não é uma tarefa apenas para uma pessoa. Quanto mais gente souber o que fazer, melhor será o combate. Por isso, pelo bem da sua saúde e de seus conhecidos, precisamos que você compartilhe esse conteúdo para o maior número de pessoas. Reservamos pequenas frases e imagens que podem ser facilmente postadas e enviadas via Facebook ou WhatsApp. Toda semana tem imagem nova! Ajude-nos nessa batalha constante contra o Aedes.</p>
    </div>
    <div class="heading social">
    	<div class="bgcont">
        	<label>Compartilhe nas Redes Sociais</label>
            <hr>
            <br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"]?>/main/content/gallery.php" target="_blank">Compartilhar</a>
        </div>
    </div>
</body>
</html>
