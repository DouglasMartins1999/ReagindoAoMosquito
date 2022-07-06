<?php 
	include "../assets/libraries/server/Mobile_Detect.php";

	$detect = new Mobile_Detect();

	if ($detect->isMobile() || $detect->isTablet()) {
		echo "<script>location.href='mobile.php'</script>";
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png"/>
<title>Combata o Mosquito ao mesmo tempo que se diverte!</title>
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet"> 
<style>
	body {
		margin:0;
		font-family:'PT Sans', sans-serif;
	}
	@font-face {
		font-family: TrendexLight;
		src: url('/assets/fonts/TrendexLightSSi.TTF');
	}
	@font-face {
		font-family: CocogoosePro;
		src: url('/assets/fonts/Cocogoose Pro.ttf');
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
	.content {
		width:80%;
		height:80%;
		top:0;
		left:0;
		position:relative;
		background:#FAFAFA;
		padding-left:10%;
		padding-right:10%;
	}
	.content .containter {
		display:inline-block;
		margin:0 auto;
		text-align:center;
		position:relative;
		left:50%;
		transform:translateX(-50%);

	}
	.topbar {
		text-align:center;
		color:#FFF;	
		padding:0px 20px;
		border-bottom:1px solid #AAAAAA66;
	}
	.topbar a {
		color:#333;
		font-size:14px;
		text-decoration:none;
		padding:20px 10px;
		display:inline-block;
		border-bottom:1px solid #0099CC00;
		transition:all ease 700ms;
	}
	.topbar a:hover {
		border-bottom:1px solid #09C;	
	}
	.star {
		width:30%;
		min-width:400px;
		display:block;
		margin:0 auto;
		transform: translateY(-57%);
		top:50%;
		position:relative;
		text-align:center
	}
	.star img {
		filter:brightness(200);
		opacity:0.9;
		width:100%;
		height:auto;	
	}
	.fon1 {
		font-family:'TrendexLight';
		font-size:3em;
		font-weight:500;
		color:#660000;
		transform: translateY(-90%);
		top:50%;
		position:absolute;
		left:12%;
	}
	.fon2 {
		font-family:'CocogoosePro';
		font-size:3em;
		font-weight:500;
		color:#660000;
		transform: translateY(20%);
		top:50%;
		position:absolute;
		left:19%;
	}
	.fon3 {
		font-size:1.3em;
		font-weight:700;
		color:#660000;
		top:49%;
		position:absolute;
		left:19%;
	}
	.lined {
		overflow: hidden;
		text-align: center;
		color:#600;
	}
	.lined:before,
	.lined:after {
		background-color: #600;
		content: "";
		display: inline-block;
		height: 2px;
		position: relative;
		vertical-align: middle;
		width: 50%;
	}
	.lined:before {
		right: 0.5em;
		margin-left: -50%;
	}
	.lined:after {
		left: 0.5em;
		margin-right: -50%;
	}
	.bordercolor {
		border-top:5px solid #555;
	}
	.imgicon {
		width:40%;
		box-sizing:border-box;
		float:left;	
		text-align:center;
		height:400px;
		margin-top:5%;
	}
	.contimg {
		width:100%;
		top:50%;
		position:relative;
		transform:translateY(-50%);
		max-width:310px;
		min-width:170px;
	}
	.conttext {
		width:55%;
		box-sizing:border-box;
		float:left;
		height:400px;
		padding:0px 0px 0px 5%;
		border-left:1px solid #CCC;
		margin:5% 0px 0px 5%;
		text-align:left;
		color:#666;
		display:inline-block;
	}
	.conttext .ti {
		font-family:'CocogoosePro';
		font-size:2.5em;
		text-transform:uppercase;
		line-height:1.2;
	}
	.conttext a {
		text-decoration:none;	
	}
	.header .ti {
		font-family:'CocogoosePro';
		font-size:4em;
		text-transform:uppercase;
		line-height:1.2;
		color:#FFF;
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
		height:80%;
		top:0;
		left:0;
		background:rgba(0,0,0,0.6);
		padding:10%;
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
	.bgcont a {
		padding:10px 20px;
		color:#FFF;
		background:#FFFFFF77;
		border:1px solid #FFF;
		border-radius:5px;
		margin:5px;
		text-transform:uppercase;
		animation-name:button;
   		animation-duration:500ms;	
		animation-iteration-count:infinite;
		animation-direction: alternate;
		text-decoration:none;
	}
	.right {
		float:right;
		text-align:right;
		border-left:0;
		padding:0px 5% 0px 0px;
		border-right:1px solid #CCC;
		margin:5% 5% 0px 0px;
	}
	.scrollToTop {
		text-align:center;
		padding:10px 20px;
		color:#FFF;
		background:#00000077;
		border:1px solid #333;
		border-radius:5px;
		margin:5px;
		text-transform:uppercase;
		position:fixed;
		bottom:35px;
		right:40px;
		display:none;
		z-index:997;
		text-decoration:none;
	}
	.modal {
		width:100%;
		height:100%;
		position:fixed;
		top:0;
		left:0;
		background:#000000AA;
		z-index:998;
		display:none;	
	}
	.videocontent {
		width:60%;
		min-width:600px;
		background:#FFF;
		border-radius:10px;
		box-shadow:#FFFFFF33;
		transform:translate(-50%,-50%);
		top:50%;
		left:50%;
		position:fixed;
		border:5px solid #FFF;
		z-index:999;
		display:none;
	}
	.videocontent video {
		width:100%;	
		border-radius:10px;
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
	<a href="#" class="scrollToTop">Voltar ao<br>Topo</a>
	<div class="header" id="home">
    	<div class="topbar">
        	<a href="#home">Home</a>
            <a href="#whatis">O que é?</a>
            <a href="#AI">Aprendizagem Interativa</a>
            <a href="#maps">Mapa de Casos</a>
            <a href="#quiz">Quiz</a>
            <a href="#denuncia">Denúncia de Focos</a>
        </div>
        <div class="star">
	        <img src="/assets/images/landpage/star.png">
            <div class="fon1">SMARTPHONE</div>
            <div class="fon3">&amp;</div>
            <div class="fon2">COMBATE</div>
        </div>
    </div>
    <div class="content bordercolor" id="whatis">
    	<div class="containter">
        	<div class="imgicon">
            	<img src="/assets/images/landpage/icons/reacting.png" class="contimg">
            </div>
            <div class="conttext">
            	<label class="ti">Por que estar aqui?</label>
                <br>
                <p>Uma das grandes preocupações de todos atualmente são os casos de dengue, e possívelmente, de zika e de chikungunya. Para evitar que essas doenças cheguem ao nosso municipio, precisamos que todos colaborem ao combater o mosquito transmissor. O problema é que aprender sobre esses assuntos costuma ser cansativo para muitas pessoas - principalmente para os jovens - ou falta uma forma mais fácil de aprender. Por isso, temos uma excelente proposta aqui: Você aprende sobre como combater o mosquito, sem precisar sair do seu celular ou computador, que tal? E mais, você não precisa ler textos enormes, aqui está tudo resumido, basta você pegar poucos minutos do seu tempo para aprender. Quer saber como? Desça um pouco mais a página. 
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header reacting">
    	<div class="bgcont">
            <div class="ti">
                O combate começa se informando!
            </div>
            <br><br><hr>
            <br><br><br>
            <a onClick="show('what')">Ver o vídeo</a>
        </div>
    </div>
    <div class="content bordercolor" id="AI">
    	<div class="containter">
        	<div class="imgicon" style="float:right">
            	<img src="/assets/images/landpage/icons/ainterativa.png" class="contimg">
            </div>
            <div class="conttext right">
            	<label class="ti">Aprendizagem Interativa</label>
                <br>
                <p>Vamos concordar, ninguém gosta de ficar lendo textos e mais textos, né? Você começa a ler e logo já está caindo de sono e precisa ler tudo de novo pra entender o que tinha acabado de ler. Esse é o seu caso? Então estamos aqui pra ajudar. A "Aprendizagem Interativa" é o nome que batizamos nossa forma de aprender mais sobre um assunto (O Aedes aegypti no caso). Aqui, a informação é objetiva, só tem aquilo que você precisa aprender, e tudo numa interface gráfica legal e prática de estar. Você aprende com poucos cliques. Experimente! Sei que você vai gostar.</p>
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header ainterativa">
    	<div class="bgcont">
            <div class="ti">
                Aprendizagem <br>Interativa
            </div>
            <br><br><hr>
            <br><br><br>
            <a onClick="show('interativa')">Ver o vídeo</a>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"];?>/main/interactive/interativa.php" target="_blank">Começar agora</a>
        </div>
    </div>
    <div class="content bordercolor" id="quiz">
    	<div class="containter">
        	<div class="imgicon">
            	<img src="/assets/images/landpage/icons/quiz.png" class="contimg">
            </div>
            <div class="conttext">
            	<label class="ti">Quiz: Teste seus conhecimentos!</label>
                <br>
                <p>Usou nossa Aprendizagem Interativa? Já tem um conhecimento sólido sobre esse assunto? Que tal colocá-los a prova com esse minigame em forma de quiz? Aqui você tem 120 segundos para responder 12 questões aleatórias sobre o mosquito. Quanto mais questões você responder corretamente em menos tempo, maior a sua pontuação. O que me diz de  você comparar seu conhecimento com seus colegas de classe e amigos pra ver quem tira a maior pontuação? Além disso, se você tiver um <a href="<?php echo $_ENV["BASE_URL"];?>/main/register.php">cadastro em nosso site</a>, sua pontuação ficará registrada em nosso sistema e os outros visitantes poderão ver que você já está por dentro do assunto, gostou?
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header quiz">
    	<div class="bgcont">
            <div class="ti">
                Teste seus conhecimentos sobre as doenças!
            </div>
            <br><br><hr>
            <br><br><br>
            <a onClick="show('quiz')">Ver o vídeo</a>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"];?>/main/interactive/120x12.php" target="_blank">Começar agora</a>
        </div>
    </div>
    <div class="content bordercolor" id="maps">
    	<div class="containter">
        	<div class="imgicon" style="float:right">
            	<img src="/assets/images/landpage/icons/maps.png" class="contimg">
            </div>
            <div class="conttext right">
            	<label class="ti">Mapa de Focos!</label>
                <br>
                <p>Agora você já deve ter visto que o Aedes aegypti não é coisa que se brinque. Mas você sabia que tem muitas ruas em Malhada de Pedras que deram lugar ao mosquito ou tem a possibilidade de gerar um criadouro? Essa situação preocupante nos motivou a criar um mapa, com todos os locais que podem ter focos do mosquito. Quer saber se a sua rua está segura? Recomendo que acesse agora mesmo:</p>
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header map">
    	<div class="bgcont">
            <div class="ti">
                Saiba qual o estado que está sua rua!
            </div>
            <br><br><hr>
            <br><br><br>
            <a onClick="show('map')">Ver o vídeo</a>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"];?>/main/interactive/focosmap.php" target="_blank">Visitar Mapa</a>
        </div>
    </div>
    <div class="content bordercolor">
    	<div class="containter">
        	<div class="imgicon">
            	<img src="/assets/images/landpage/icons/learnmore.png" class="contimg">
            </div>
            <div class="conttext">
            	<label class="ti">Saiba +</label>
                <br>
                <p>Gosta de ir mais a fundo? Precisa de referências para fazer um trabalho de escola sobre esse assunto? Não se preocupe! Você está no lugar certo. Nós também disponibilizamos para os alunos, textos informativos com mais detalhes sobre o mosquito em si e as doenças transmitidas por ele. Possuem boas fontes e podem ser consultados por qualquer um. Quer aprender mais? Então não deixe de conferir! 
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header learn">
    	<div class="bgcont">
            <div class="ti">
                <br>Aprenda ainda mais!
            </div>
            <br><br><hr>
            <br><br><br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"];?>/articles.php?id=01" target="_blank">Visualizar Textos</a>
        </div>
    </div>
    <div class="content bordercolor" id="denuncia">
    	<div class="containter">
        	<div class="imgicon" style="float:right">
            	<img src="/assets/images/landpage/icons/report.png" class="contimg">
            </div>
            <div class="conttext right">
            	<label class="ti">Mostre onde está o Aedes</label>
                <br>
                <p>Nós do Reagindo ao Mosquito não ficamos só na teoria. Foram horas e horas batalhando juntos para que vocês tivessem acesso a esse conteudo. Porém nada disso seria útil sem a sua participação. Você já é independente! Então está na hora de partir pra luta. Conhece algum lugar que esteja com água parada? Lixo acumulado? Qualquer lugar que possa se tornar um foco do mosquito? Por favor, nos ajude a eliminar! Usando nossa página, envie uma foto do local com uma breve descrição do possível foco e onde ele está localizado, seja na cidade ou na zona rural. Sua denúncia será enviada diretamente para a Secretaria Municipal de Saúde e eles farão a vistoria assim que possível. É juntos que iremos cuidar de nossa cidade!
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header report">
    	<div class="bgcont">
            <div class="ti">
                <br>Denúncia de Focos!
            </div>
            <br><br><hr>
            <br><br><br>
            <a onClick="show('report')">Ver o vídeo</a>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"];?>/main/trashreport.php" target="_blank">Quero Denunciar!</a>
        </div>
    </div>
    <div class="content bordercolor">
    	<div class="containter">
        	<div class="imgicon">
            	<img src="/assets/images/landpage/icons/socialnetworks.png" class="contimg">
            </div>
            <div class="conttext">
            	<label class="ti">Divulgue nosso conteúdo!</label>
                <br>
                <p>Combater o mosquito não é uma tarefa apenas para uma pessoa. Quanto mais gente souber o que fazer, melhor será o combate. Por isso, pelo bem da sua saúde e de seus conhecidos, precisamos que você compartilhe esse conteúdo para o maior número de pessoas. Reservamos pequenas frases e imagens que podem ser facilmente postadas e enviadas via Facebook ou WhatsApp. Toda semana tem imagem nova! Ajude-nos nessa batalha constante contra o Aedes.
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header social">
    	<div class="bgcont">
            <div class="ti">
                Compartilhe <br>nas Redes Sociais
            </div>
            <br><br><hr>
            <br><br><br>
            <a style="animation-delay:500ms;" href="<?php echo $_ENV["BASE_URL"];?>/main/content/gallery.php" target="_blank">Compartilhar</a>
        </div>
    </div>
    <div class="content bordercolor">
    	<div class="containter">
        	<div class="imgicon" style="float:right">
            	<img src="/assets/images/landpage/icons/phone.png" class="contimg">
            </div>
            <div class="conttext right">
            	<label class="ti">Mais Funções pelo celular!</label>
                <br>
                <p>Sabia que pelo celular você pode denunciar um foco com a própria câmera, receber notificações semanalmente sobre cuidados com o mosquito, compartilhar imagens pelo WhatsApp, e tudo mais que você faz no site de uma maneira mais prática, ao alcance dos seus dedos em qualquer lugar que você estiver? Basta acessar nossa página inicial por qualquer navegador seja no iOS, Android ou Windows Phone. Queremos facilitar a sua vida cada dia mais, e lhe oferecer uma forma mais divertida de entender um assunto tão sério. Está esperando o que? Pegue seu celular agora mesmo, escaneie o código ao lado ou acesse: <?php echo $_ENV["BASE_URL"]?>
                </p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="header phone">
    	<div class="bgcont">
            <div class="ti">
            <br>
                Use também seu Smartphone!
            </div>
            <br><br><hr>
            <br><br><br>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},1200);
		return false;
	});
	
});
</script>
</html>
