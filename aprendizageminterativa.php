<html>
<head>
<title>Aprendizagem Interativa - Reagindo ao Mosquito</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF=8">
<style>
	/*Desenvolvido por Douglas Martins*/
	body {
		margin:0;
		font-family:"Tahoma","Trebuchet MS", Helvetica, sans-serif;
	}
	.mainmenu {
		width:800px;
		height:480px;
		position:absolute;
	}
	.logomain {
		left:119px;
		top:51px;
		position:absolute;
	}
	.doencaidbutton {
		width:100px;
		height:100px;
		position:absolute;
		left:48px;
		top:324px;
		cursor:pointer;
	}
	.aedesidbutton {
		width:140px;
		height:100px;
		position:absolute;
		left:231px;
		top:324px;
		cursor:pointer;
	}
	.sintomasidbutton {
		width:100px;
		height:100px;
		position:absolute;
		left:450px;
		top:324px;
		cursor:pointer;
	}
	.precaidbutton {
		width:100px;
		height:100px;
		position:absolute;
		left:650px;
		top:324px;
		cursor:pointer;
	}
	.idnotifier {
		top:275px;
		left:0;
		position:absolute;
		background:RGBA(0,0,0,0.5);
		color:#FFF;
		padding:5px 14px;
		display:none;
	}
	.iconimg {
		position:absolute;
	}
	.titlemain {
		color:#FFF;
		position:absolute;
		top:116px;
		left:455px;
	}
	.titlemain h1, h2, h3 {
		margin:0;
	}
	.nextbutton {
		position:absolute;
		color:#333;
		padding:5px 10px;
		cursor:pointer;
	}
	.nextbutton:hover {
		color:#FFF;
	}
	.graytab {
		background:#CCC;
		top:325px;
		left:0;
		position:absolute;
		width:800px;
		height:220px;
	}
	.labelAbout {
		color:#333;
		left:41px;
		top:30px;
		position:absolute;
		font-size:16px;
		z-index:977;
	}
	.labelAbout h1, h2, h3, h4 {
		margin:0;
	}
	.button1 {
		padding:7px 20px;
		background:#999;
		color:#333;
		font-size:14px;
		border:0;
		top:7px;
		position:relative;
	}
	.title1 {
		top:10px;
		left:78px;
		position:absolute;
		font-family:"Trebuchet MS", Helvetica, sans-serif;
		color:#FFF;
		margin:0;
	}
	.brasilicon{
		top:215px;
		left:158px;
		position:absolute;
		width:167px;
		height:187px;
		cursor:pointer;
	}
	.egitoicon {
		top:88px;
		left:574px;
		position:absolute;
		width:47px;
		height:48px;
		cursor:pointer;
	}
	.infocard1 {
		color:#FFF;
		padding:10px;
		background:RGBA(0,0,0,0.5);
		position:absolute;
		font-size:14px;
	}
	.infoStatus {
		width:165px;
		color:#FFF;
		position:absolute;
		top:85px;
		left:615px;
		font-size:18px;
	}
	.markn {
		position:absolute;
		width:50px;
		height:50px;
		cursor:pointer;
	}
	.title2 {
		margin: 0;
		font-size: 31;
		width: 250px;
		top: 18px;
		right: 0;
		position: absolute;
	}
	.button2 {
		position:absolute;
		left:0;
		width:83px;
		cursor:pointer;
	}
	.button2:hover {
		background:RGBA(0,0,0,0.7);
	}
	.TimeClass {
		color:#333;
		left:35px;
		top:437px;
		position:absolute;
	}
	.button3 {
		position:absolute;
		width:81px;
		height:33px;
		top:148px;
		cursor:pointer;
	}
	.BreedText {
		width:600px;
		top:235px;
		left:50%;
		margin-left:-300px;
		position:absolute;
		text-align:center;
		color:#555;
	}
	.button4 {
		width:46px;
		height:46px;
		cursor:pointer;
		position:absolute;
		top:132px;
	}
	.dengueicon {
		top:186px;
		left:575px;
		position:absolute;
		width:51px;
		height:75px;
		cursor:pointer;
	}
	.dengueicon {
		top:186px;
		left:575px;
		position:absolute;
		width:51px;
		height:75px;
		cursor:pointer;
	}
	.brasilicon2 {
		top:186px;
		left:146px;
		position:absolute;
		width:162px;
		height:172px;
		cursor:pointer;
	}
	.zikaicon {
		top:191px;
		left:576px;
		position:absolute;
		width:21px;
		height:24px;
		cursor:pointer;
	}
	.chikicon {
		top:213px;
		left:575px;
		position:absolute;
		width:44px;
		height:48px;
		cursor:pointer;
	}
	.SintInfo {
		width:210px;
		top:90px;
		left:526px;
		position:absolute;
		color:#333;
	}
	.LitIndic {
		width:15px;
		height:15px;
		position:absolute;
		cursor:pointer;
	}
	.BigIndic {
		width:22px;
		height:22px;
		position:absolute;
		cursor:pointer;
	}
	.NavIndic {
		height:28px;
		top:424px;
		position:absolute;
		cursor:pointer;
	}
	.DurationDoen {
		background:RGBA(0,0,0,0.6);
		padding:10px;
		color:#FFF;
		width:90px;
		position:absolute;
		text-align:center;
		display:none;
	}
	.infoabout {
		position: absolute;
		top: 60px;
		left: 50%;
		width: 700px;
		text-align: center;
		background: RGBA(255,255,255,0.8);
		margin-left: -350px;
		padding: 15px 0px;
		border: #CCC solid 1px;
		color: #555;
		cursor:pointer;
	}
</style>
<script>
	function showid(name,left){
		document.getElementById("idnotifier").style.display = "block";
		document.getElementById("idnotifier").innerHTML = name;
		document.getElementById("idnotifier").style.left = left;
	}
	function hideid(){
		document.getElementById("idnotifier").style.display = "none";
	}
	function dimiss(idInfo){
		document.getElementById(idInfo).style.display = "none";
	}
	function prevenct(){
			var number = Number(document.getElementById('numberPrv').innerHTML) + 1;
			document.getElementById('numberPrv').innerHTML = number
			switch (number) {
				case 2:
					document.getElementById('previmg').src = 'img/ainter/project/prev/2.png'
					document.getElementById('prevmaindata').innerHTML = 'Mantenha calhas sempre limpas e livre de resíduos';
					document.getElementById('prevsecdata').innerHTML = 'A presença de folhas e outras impurezas nelas impedem a passagem de água.';
					break;
				case 3:
					document.getElementById('previmg').src = 'img/ainter/project/prev/3.png'
					document.getElementById('prevmaindata').innerHTML = 'Lave recipientes que acumulam água com frequência';
					document.getElementById('prevsecdata').innerHTML = 'Bebedouros e tigelas de animais são exemplos que devemos estar atentos';
					break;
				case 4:
					document.getElementById('previmg').src = 'img/ainter/project/prev/4.png';
					document.getElementById('prevmaindata').innerHTML = 'Mantenha vasos de plantas com pouca água';
					document.getElementById('prevsecdata').innerHTML = 'Assim como a planta precisa de água para viver, o mosquito também precisa dela para se reproduzir';
					break;
				case 5:
					document.getElementById('previmg').src = 'img/ainter/project/prev/5.png'
					document.getElementById('prevmaindata').innerHTML = 'Encha os pratos de vasos de plantas com areia';
					document.getElementById('prevsecdata').innerHTML = 'E encha-os até a borda, para evitar acumular água neles';
					break;
				case 6:
					document.getElementById('previmg').src = 'img/ainter/project/prev/6.png'
					document.getElementById('prevmaindata').innerHTML = 'Mantenha lajes, áreas de serviço, entre outros sempre secas';
					document.getElementById('prevsecdata').innerHTML = 'Mesmo que a água esteja no chão, ela pode ainda servir de foco do mosquito por estar parada';
					break;
				case 7:
					document.getElementById('previmg').src = 'img/ainter/project/prev/7.png'
					document.getElementById('prevmaindata').innerHTML = 'Mantenha ralos limpos e protegidos';
					document.getElementById('prevsecdata').innerHTML = 'Eles estão sempre com água, por isso devem estar limpos para evitar algo pior.';
					break;
				case 8:
					document.getElementById('previmg').src = 'img/ainter/project/prev/8.png'
					document.getElementById('prevmaindata').innerHTML = 'Mantenha garrafas sempre bem tampadas ou viradas para baixo.';
					document.getElementById('prevsecdata').innerHTML = 'Elas podem guardar água da chuva que seria útil ao Aedes';
					break;
				case 9:
					document.getElementById('previmg').src = 'img/ainter/project/prev/9.png'
					document.getElementById('prevmaindata').innerHTML = 'Higienize potes de água com frequência.';
					document.getElementById('prevsecdata').innerHTML = 'Animais domésticos precisam de água para beber, então pelo menos mantenha o prato limpinho';
					break;
				case 10:
					document.getElementById('previmg').src = 'img/ainter/project/prev/10.png'
					document.getElementById('prevmaindata').innerHTML = 'Descarte pneus velhos ou mantenha-os sobre abrigo seco.';
					document.getElementById('prevsecdata').innerHTML = 'Assim como as garrafas, eles podem guardar água da chuva, o que não é nada bom';
					break;
				case 11:
					document.getElementById('previmg').src = 'img/ainter/project/prev/11.png'
					document.getElementById('prevmaindata').innerHTML = 'Troque a água de aquários e de plantas aquáticas com frequência';
					document.getElementById('prevsecdata').innerHTML = 'Eles podem ser um lugar apreciável para o mosquito depositar seus ovos';
					break;
				case 12:
					document.getElementById('previmg').src = 'img/ainter/project/prev/12.png'
					document.getElementById('prevmaindata').innerHTML = 'Evite cultivar plantas como babosa, bromélias ou espadas de São Jorge';
					document.getElementById('prevsecdata').innerHTML = 'Essas plantas acumulam água em seu interior, o que pode não ser uma boa idéia';
					break;
				case 13:
					document.getElementById('previmg').src = 'img/ainter/project/prev/13.png'
					document.getElementById('prevmaindata').innerHTML = 'Guarde o lixo em sacos plásticos bem fechados';
					document.getElementById('prevsecdata').innerHTML = 'Se não estiver bem fechados, o lixo pode servir de criadouro ao mosquito';
					break;
				case 14:
					document.getElementById('previmg').src = 'img/ainter/project/prev/14.png'
					document.getElementById('prevmaindata').innerHTML = 'Evite jogar lixo em terrenos baldios';
					document.getElementById('prevsecdata').innerHTML = 'Além de não ser nada bonito, o lixo pode ser um bom aperitivo para o Aedes';
					break;
				case 15:
					document.getElementById('previmg').src = 'img/ainter/project/prev/15.png'
					document.getElementById('prevmaindata').innerHTML = 'Use repelente... Mas faça mais';
					document.getElementById('prevsecdata').innerHTML = 'O efeito do repelente é temporário. Quando ele acabar, você está sucetível novamente.';
					break;
				case 16:
					document.getElementById('Prevenir').style.display = "none";
					document.getElementById('precaFinish').style.display = "block";
					break;
			
		}
	}
	function showmenu(hide,show){
		document.getElementById(hide).style.display = "none";
		document.getElementById(show).style.display = "block";
	}
	function more(){
		document.getElementById('graytab').style.top = "258px";
		document.getElementById('AboutAedes1').style.display = "none";
		document.getElementById('AboutAedes2').style.display = "block";
	}
	function hideallcards(){
		document.getElementById('brasilcard').style.display = "none";
		document.getElementById('egitocard').style.display = "none";
	}
	function showall(show){
		document.getElementById(show).style.display = "block";
	}
	function showInfo(data){
		var one = '<b>[1]</b> Ele é fácilmente diferenciado de outras espécies de mosquito por suas manchas brancas rajadas que aparecem na cabeça, no dorso e nas pernas do mosquito.';
		var two = '<b>[2]</b> Seu vôo é silencioso, de modo que não é capaz de ser ouvido pelo ouvido humano.';
		var three = '<b>[3]</b> Apenas <b>a fêmea</b> se alimenta de sangue. No momento da picada, o mosquito ingeta no sangue humano uma substância anestésica, que faz com que a pessoa <b>não sinta dor nem coceira</b> com o ataque.';
		var four = '<b>[4]</b> Diferentemente do mosquito comum, o <i>Aedes aegypti</i> tem uma cor mais escura, quase preta.';
		var five = '<b>[5]</b> Seu tamanho é bem pequeno, chegando ser menor que o mosquito comum..';
		
		switch (data) {
			case '1':
				document.getElementById("infoStatus").innerHTML = one;
				break;
			case '2':
				document.getElementById("infoStatus").innerHTML = two;
				break;
			case '3':
				document.getElementById("infoStatus").innerHTML = three;
				break;
			case '4':
				document.getElementById("infoStatus").innerHTML = four;
				break;
			case '5':
				document.getElementById("infoStatus").innerHTML = five;
				break;
		}
	}
	function cardInfo(iten){
		var oneIn = '<b>[1]</b> Geralmente, o <i>Aedes aegypti</i> ataca de dia. Durante a força do sol, o mosquito busca abrigo a sombra de árvores e dentro de casas. Normalmente, a picada ocorre no <b>começo da manhã</b> e nos <b>fins de tardes</b>.';
		var twoIn = '<b>[2]</b> O mosquito se alimenta de matéria orgânica (Como nectares). <b>Apenas a fêmea</b> se alimenta de sangue, pois nele há uma proteína que ajuda no desenvolvimento dos ovos.';
		var threeIn = '<b>[3]</b> A fêmea transmite o vírus no momento da picada. Quando ela se alimenta de sangue, a salíva do mosquito entra em contato com o organismo, e <b>é na saliva que o vírus se encontra</b>.';
		var fourIn = '<b>[4]</b> O mosquito tem vôo raso. Geralmente não ultrapassa 1,5 metro de altura. Entretanto, a fêmea costuma percorrer longas distâncias para depositar seus ovos.';
		
		switch (iten) {
			case '1':
				document.getElementById("dataShow").innerHTML = oneIn;
				document.getElementById("imgicon1").style.display = 'block';
				document.getElementById("imgicon2").style.display = 'none';
				document.getElementById("imgicon3").style.display = 'none';
				document.getElementById("imgicon4").style.display = 'none';
				document.getElementById("buttoncard1").style.background = 'RGBA(0,0,0,0.7';
				document.getElementById("buttoncard2").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard3").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard4").style.background = 'RGBA(0,0,0,0.0';
				break;
			case '2':
				document.getElementById("dataShow").innerHTML = twoIn;
				document.getElementById("imgicon1").style.display = 'none';
				document.getElementById("imgicon2").style.display = 'block';
				document.getElementById("imgicon3").style.display = 'none';
				document.getElementById("imgicon4").style.display = 'none';
				document.getElementById("buttoncard1").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard2").style.background = 'RGBA(0,0,0,0.7';
				document.getElementById("buttoncard3").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard4").style.background = 'RGBA(0,0,0,0.0';
				break;
			case '3':
				document.getElementById("dataShow").innerHTML = threeIn;
				document.getElementById("imgicon1").style.display = 'none';
				document.getElementById("imgicon2").style.display = 'none';
				document.getElementById("imgicon3").style.display = 'block';
				document.getElementById("imgicon4").style.display = 'none';
				document.getElementById("buttoncard1").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard2").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard3").style.background = 'RGBA(0,0,0,0.7';
				document.getElementById("buttoncard4").style.background = 'RGBA(0,0,0,0.0';
				break;
			case '4':
				document.getElementById("dataShow").innerHTML = fourIn;
				document.getElementById("imgicon1").style.display = 'none';
				document.getElementById("imgicon2").style.display = 'none';
				document.getElementById("imgicon3").style.display = 'none';
				document.getElementById("imgicon4").style.display = 'block';
				document.getElementById("buttoncard1").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard2").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard3").style.background = 'RGBA(0,0,0,0.0';
				document.getElementById("buttoncard4").style.background = 'RGBA(0,0,0,0.7';
				break;
		}
	}
	function writeTime(dataWrite){
		document.getElementById("TimeClass").innerHTML = dataWrite;
	}
	function setBreed(Text,Class){
		document.getElementById("BreedClass").innerHTML = Class;
		document.getElementById("BreedText").innerHTML = Text;
	}
	function durationShow(show){
		document.getElementById(show).style.display = 'block';
	}
	function durationHide(){
		document.getElementById('DengueDurat').style.display = 'none';
		document.getElementById('ZikaDurat').style.display = 'none';
		document.getElementById('ChikDurat').style.display = 'none';
	}
	function setSint(title,char,dengue,zika,chik,hover){
		document.getElementById('SintTitle').innerHTML = title;
		document.getElementById('SintDetail').innerHTML = char;
		document.getElementById('SintDengue').innerHTML = dengue;
		document.getElementById('SintZika').innerHTML = zika;
		document.getElementById('SintChik').innerHTML = chik;
		document.getElementById('SintChik').style.color = '#036';
		document.getElementById('SintDengue').style.color = '#036';
		document.getElementById('SintZika').style.color = '#036';
		document.getElementById(hover).style.color = '#900';
	}
	var moduleN = 0;
	function finishModule(){
		moduleN++;
		if(moduleN == 4){
			location.reload();
		}
	}
</script>
</head>
<body>
	<div class="mainmenu" id="mainmenu" style="background:url('img/ainter/bg/mainbg.jpg');">
		<img src="img/ainter/project/Logo.png" class="logomain" id="logomain">
		<div class="idnotifier" id="idnotifier"></div>
		<div id="doencaidbutton" class="doencaidbutton" onMouseOver="showid('As Doenças','45px');" onMouseOut="hideid();" onClick="showmenu('mainmenu','doencamain');"></div>
		<div id="aedesidbutton" class="aedesidbutton" onMouseOver="showid('O Aedes aegypti','230px');" onMouseOut="hideid();" onClick="showmenu('mainmenu','aedesmain');"></div>
		<div id="sintomasidbutton" class="sintomasidbutton" onMouseOver="showid('Os Sintomas','442px');" onMouseOut="hideid();" onClick="showmenu('mainmenu','sintomasmain');"></div>
		<div id="precaidbutton" class="precaidbutton" onMouseOver="showid('A Prevenção','645px');" onMouseOut="hideid();" onClick="showmenu('mainmenu','precamain');"></div>
	</div>
	<div id="doencamain" class="mainmenu" style="background:url('img/ainter/bg/doencasmainbg.jpg');display:none;">
		<img src="img/ainter/project/doencaicon.png" class="iconimg" id="doencaimg" style="top:152px;left:115px;">
		<div class="titlemain" id="title">
			<span>O problema:</span>
			<h1>As doenças</h1>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#F66;" onClick="showmenu('doencamain','DengueOrigin');">Próximo</div>
	</div>
	
	<div id="aedesmain" class="mainmenu" style="background:url('img/ainter/bg/aedesmainbg.jpg');display:none;">
		<img src="img/ainter/project/aedesicon.png" class="iconimg" id="aedesimg" style="top:114px;left:91px;">
		<div class="titlemain" id="title">
			<span>O causador:</span>
			<h1>O Aedes aegypti</h1>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#0FF;" onClick="showmenu('aedesmain','AboutAedes');">Próximo</div>
	</div>
	
	<div id="sintomasmain" class="mainmenu" style="background:url('img/ainter/bg/sintomasmainbg.jpg');display:none;">
		<img src="img/ainter/project/sintomasicon.png" class="iconimg" id="aedesimg" style="top:144px;left:144px;">
		<div class="titlemain" id="title">
			<span>Identificando</span>
			<h1>Os Sintomas</h1>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#FF0;" onClick="showmenu('sintomasmain','Sintomas');">Próximo</div>
	</div>
	
	<div id="precamain" class="mainmenu" style="background:url('img/ainter/bg/precamainbg.jpg');display:none;">
		<img src="img/ainter/project/precaicon.png" class="iconimg" id="aedesimg" style="left:86px;top:146px;">
		<div class="titlemain" id="title">
			<span>Tomando</span>
			<h1>As Precauções</h1>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#6F6;" onClick="showmenu('precamain','Prevenir');">Próximo</div>
	</div>
	
	<!-- Sobre o Aedes aegypti -->
	<div class="mainmenu" id="AboutAedes" style="background:url('img/ainter/bg/Aedesabout.jpg');display:none;">
		<div class="graytab" id="graytab">
			<div class="labelAbout" style="display:block" id="AboutAedes1">
				<h1>Sobre o Mosquito</h1>
				<span><b>Nome científico: </b>Aedes aegypti</span><br>
				<button class="button1" onClick="more()">Saiba+</button>
			</div>
			<div class="labelAbout" style="display:none;" id="AboutAedes2">
				<h1>Sobre o Mosquito</h1>
				<span><b>Nome científico: </b>Aedes aegypti (Antigamente conhecido por Culex aegypti)</span><br>
				<span><b>Ordem: </b>Diptera</span><br>
				<span><b>Família: </b>Culicidae</span><br>
				<button class="button1" style="float:right;background:#900;color:#FFF;" onClick="showmenu('AboutAedes','AedesOrigin');">Próximo</button>
			</div>
		</div>
	</div>
	
	<div class="mainmenu" id="AedesOrigin" style="background:url('img/ainter/bg/AedesOrigin.jpg');display:none;" onClick="dimiss('aedesorigininfo')">
		<h1 class="title1">Origem do <i>Aedes aegypti</i></h1>
		<div class="infoabout" onClick="dimiss('aedesorigininfo')" id="aedesorigininfo">Clique em um dos paises destacados para mais informações</div>
		<div class="brasilicon" onMouseOut="hideallcards()" onMouseOver="showall('brasilcard')"></div>
		<div class="egitoicon" onMouseOut="hideallcards()" onMouseOver="showall('egitocard')"></div>
		<div class="infocard1" id="brasilcard" style="left:127px;top:314px;width:270px;display:none;">No Brasil, os primeiros registros de doenças causadas pelo Aedes aegypti são dos <b>séculos 19 (Em Curitiba)</b> e <b>20 (No Rio de Janeiro)</b>. É provável que o <b>tráfico de escravos</b> tenha trazido o mosquito da Africa para o país.</div>
		<div class="infocard1" id="egitocard" style="left:505px;top:125px;width:240px;display:none;">Acredita-se que o mosquito tenha se originado no <b>Egito</b> e de lá tenha se espalhado para outros países tropicais. Há registros de casos de Dengue desde o <b>Século 18 na Ásia e América do Norte</b>.</div>
		<div class="nextbutton" style="top:433px;left:645px;font-size:18px;color:#0FF;" onClick="showmenu('AedesOrigin','AedesCharacter');">Próximo</div>
	</div>
	
	<div class="mainmenu" id="AedesCharacter" style="background:url('img/ainter/bg/AedesStatus.jpg');display:none;" onClick="dimiss('aedescharinfo')">
		<h1 class="title1" style="color:#333;">Características do Mosquito</h1>
		<div class="infoabout" style="top:70px" onClick="dimiss('aedescharinfo')" id="aedescharinfo">Clique em um dos números para saber a característica específica</div>
		<div class="nextbutton" style="top:425px;left:656px;font-size:18px;color:#72CF5A;" onClick="showmenu('AedesCharacter','AedesHabits');">Próximo</div>
		<span class="infoStatus" id="infoStatus"></span>
		<div class="markn" style="top:218px;left:144px;" onClick="showInfo('1')"></div>
		<div class="markn" style="top:324px;left:473px;" onClick="showInfo('1')"></div>
		<div class="markn" style="top:196px;left:240px;" onClick="showInfo('1')"></div>
		<div class="markn" style="top:184px;left:394px;" onClick="showInfo('2')"></div>
		<div class="markn" style="top:311px;left:152px;" onClick="showInfo('3')"></div>
		<div class="markn" style="top:151px;left:173px;" onClick="showInfo('4')"></div>
		<div class="markn" style="top:254px;left:321px;" onClick="showInfo('5')"></div>
	</div>
	
	<div class="mainmenu" id="AedesHabits" style="background:url('img/ainter/bg/Habitos.jpg');display:none;" onClick="dimiss('aedeshabitsinfo')">
		<h1 class="title2" style="color:#FFF;">Hábitos do Mosquito</h1>
		<div class="infoabout" onClick="dimiss('aedeshabitsinfo')" id="aedeshabitsinfo">Clique em um dos números para mais informações</div>
		<div class="nextbutton" style="top:433px;left:620px;font-size:18px;color:#00e5ff;" onClick="showmenu('AedesHabits','AedesTimeline');">Próximo</div>
		<div class="button2" style="top:93px;height:77px;" id="buttoncard1" onClick="cardInfo('1')"></div>
		<div class="button2" style="top:171px;height:77px;" id="buttoncard2" onClick="cardInfo('2')"></div>
		<div class="button2" style="top:249px;height:70px;" id="buttoncard3" onClick="cardInfo('3')"></div>
		<div class="button2" style="top:320px;height:73px;" id="buttoncard4" onClick="cardInfo('4')"></div>
		
		<span style="top:153px;width:250px;position:absolute;right:10px;color:#333;" id="dataShow"></span>
		
		<img src="img/ainter/project/sunicon.png" style="top:128px;left:193px;position:absolute;display:none;" id="imgicon1">
		<img src="img/ainter/project/fruits.png" style="top:137px;left:202px;position:absolute;display:none;" id="imgicon2">
		<img src="img/ainter/project/virusicon.png" style="top:105px;left:175px;position:absolute;display:none;" id="imgicon3">
		<img src="img/ainter/project/flyicon.png" style="top:78px;left:157px;position:absolute;display:none;" id="imgicon4">
	</div>
	
	<div class="mainmenu" id="AedesTimeline" style="background:url('img/ainter/bg/AedesTimeline.jpg');display:none;" onClick="dimiss('aedestimeinfo')">
		<h1 class="title1" style="color:#FFF;">Linha do Tempo</h1>
		<div class="infoabout" onClick="dimiss('aedestimeinfo')" id="aedestimeinfo">Selecione um ano para saber mais informações</div>
		<div class="nextbutton" style="top:431px;left:660px;font-size:18px;color:#72CF5A;" onClick="showmenu('AedesTimeline','AedesBreeding');">Próximo</div>
		<span class="TimeClass" id="TimeClass"></span>
		
		<div class="button3" style="left:153px;" onClick="writeTime('<b>[1762]</b> Foi registrado oficialmente pelo nome de <b><i>Culex aegypti</i></b>')"></div>
		<div class="button3" style="left:256px;" onClick="writeTime('<b>[1818]</b> Passou a ser conhecido por <i>Aedes aegypti</i> por se assimilar ao gênero <i>Aedes</i>')"></div>
		<div class="button3" style="left:358px;" onClick="writeTime('<b>[1865]</b> Primeiro caso de dengue no Brasil em Recife/PE')"></div>
		<div class="button3" style="left:462px;" onClick="writeTime('<b>[1872]</b> Primeira epidemia de dengue: Em salvador com cerca de 2.000 mortes')"></div>
		<div class="button3" style="left:565px;" onClick="writeTime('<b>[1953]</b> Primeiro caso identificado de Chikungunya na Africa')"></div>
		
		<div class="button3" style="left:150px;top:236px;" onClick="writeTime('<b>[1954]</b> Primeiro caso de Zika na Africa')"></div>
		<div class="button3" style="left:254px;top:236px;" onClick="writeTime('<b>[1955]</b> O Aedes aegypti é erradicado do Brasil por medidas contra a Febre Amarela')"></div>
		<div class="button3" style="left:359px;top:236px;" onClick="writeTime('<b>[1967]</b> O mosquito retorna ao país pelas fronteiras de países não erradicados')"></div>
		<div class="button3" style="left:462px;top:236px;" onClick="writeTime('<b>[2010]</b> Primeiro caso registrado no Brasil de Chikungunya')"></div>
		<div class="button3" style="left:568px;top:236px;" onClick="writeTime('<b>[2015]</b> Primeiros casos de Zika registrados no Brasil')"></div>
	</div>
	
	<div class="mainmenu" id="AedesBreeding" style="background:url('img/ainter/bg/AedesReprodution.jpg');display:none;" onClick="dimiss('aedesbreedinfo')">
		<h1 class="title1" style="color:#FFF;top:17px">Reprodução e Ciclo de Vida</h1>
		<div class="infoabout" onClick="dimiss('aedesbreedinfo')" id="aedesbreedinfo" style="top:65px;">Selecione um número para mais informações</div>
		<div class="nextbutton" style="top:424px;left:667px;font-size:18px;color:#FFF;" onClick="showmenu('AedesBreeding','aedesFinish');">Próximo</div>
		<span class="TimeClass" id="BreedClass" style="left:48px;top:417px;"></span>
		<span id="BreedText" class="BreedText"></span>
		
		<div class="button4" style="left:127px;" onClick="setBreed('A vida adulta do mosquito, que dura cerca de 50 dias.','Durante ela, o mosquito pode depositar ovos inúmeras vezes.')"></div>
		<div class="button4" style="left:211px;" onClick="setBreed('Acasalamento','Acontece em até 24h depois do nascimento')"></div>
		<div class="button4" style="left:293px;" onClick="setBreed('Picada','Para coletar sangue para desenvolver os ovos')"></div>
		<div class="button4" style="left:378px;" onClick="setBreed('Postura dos ovos','Ocorre em locais próximos a água')"></div>
		<div class="button4" style="left:461px;" onClick="setBreed('Desenvolvimento do Embrião','30 minutos após os ovos cairem na água')"></div>
		<div class="button4" style="left:544px;" onClick="setBreed('Crescimento da larva','Ocorre em até 5 dias')"></div>
		<div class="button4" style="left:627px;" onClick="setBreed('Maturação e eclosão','')"></div>
	</div>
	
	<!-- Sobre as Doenças -->
	
	<div class="mainmenu" id="DengueOrigin" style="background:url('img/ainter/bg/DengueMap.jpg');display:none;" onClick="dimiss('dengueorigininfo')">
		<div class="infoabout" onClick="dimiss('dengueorigininfo')" id="dengueorigininfo">Clique em um dos paises destacados para mais informações</div>
		<div class="brasilicon2" onClick="showall('brasilcard3')"></div>
		<div class="dengueicon" onClick="showall('denguecard3')"></div>
		<div class="infocard1" id="brasilcard3" style="left:127px;top:234px;width:270px;display:none;">Os primeiros casos de dengue no Brasil surgiram em <b>Curitiba/PR</b> no <b>final do século XIX</b>. No <b>século seguinte</b>, os primeiros casos surgiram no <b>Rio de Janeiro</b>. O seu transmissor (<i>Aedes aegypti</i>) foi erradicado do Brasil na década de 50, mas na decada seguinte o mosquito retornou ao país.</div>
		<div class="infocard1" id="denguecard3" style="left:505px;top:125px;width:240px;display:none;">Não há evidências significativas da origem da Dengue. Mas existem teorias que ela tenha surgido entre as regiões da <b>Uganda, Tanzânia e do Quênia na Africa</b>, e se espalhou pelo mundo com o avanço das grandes navegações no <b>Século XV e XVI</b>.</div>
		<div class="nextbutton" style="top:431px;right:665px;font-size:18px;color:#0FF;" onClick="showmenu('DengueOrigin','ZikaOrigin');">Próximo</div>
	</div>
	
	<div class="mainmenu" id="ZikaOrigin" style="background:url('img/ainter/bg/ZikaMap.jpg');display:none;">
		<div class="brasilicon2" onClick="showall('brasilcard4')"></div>
		<div class="zikaicon" onClick="showall('denguecard4')"></div>
		<div class="infocard1" id="brasilcard4" style="left:127px;top:264px;width:270px;display:none;">Embora o vírus da Zika só tenha sido confirmado em território nacional em <b>Maio de 2015</b>, já existiam evidências da existência do vírus no Brasil em <b>2014</b>. Os primeiros relatos apareceram na <b>região nordeste</b>, e de lá se espalhou para outras regiões.</div>
		<div class="infocard1" id="denguecard4" style="left:325px;top:35px;width:240px;display:none;">O Zika Vírus foi identificado pela primeira vez em <b>1947</b> na <b>floresta de Zika, em Uganda (África)</b> em macacos. O primeiro caso de infecção pelo vírus em humanos se dá pelo <b>final da década de 50</b>. Epidemias de zika vírus eram raras, a primeira registrada foi em <b>2007</b>, na <b>Micronésia</b>.</div>
		<div class="nextbutton" style="top:431px;right:665px;font-size:18px;color:#F66;" onClick="showmenu('ZikaOrigin','ChikOrigin');">Próximo</div>
	</div>
	
	<div class="mainmenu" id="ChikOrigin" style="background:url('img/ainter/bg/ChikMap.jpg');display:none;">
		<div class="brasilicon2" onClick="showall('brasilcard5')"></div>
		<div class="chikicon" onClick="showall('denguecard5')"></div>
		<div class="infocard1" id="brasilcard5" style="left:127px;top:244px;width:270px;display:none;">O primeiro caso no Brasil ocorreu em 2010 em São Paulo, de um paciente após uma viagem a Indonésia. Em 2014, durante a Copa do Mundo, ocorreram alguns casos isolados. Entretanto, alguns meses depois, centenas de casos foram relatados, grande parte deles apenas na cidade de Feira de Santana (BA).</div>
		<div class="infocard1" id="denguecard5" style="left:335px;top:75px;width:240px;display:none;">A febre Chikungunya foi identificada primeiramente na <b>Tanzânia (África) no ano de 1952</b>. Desde então, houveram outros casos isolados da doença na Ásia e na Oceania. Uma das maiores epidemias ocorreram em <b>2006 na Índia</b>, com <b>1,5 milhão</b> de vítimas.</div>
		<div class="nextbutton" style="top:431px;right:665px;font-size:18px;color:#BB0;" onClick="showmenu('ChikOrigin','doencaFinish');">Próximo</div>
	</div>
	
	<!-- Sobre os Sintomas -->
	
	<div class="mainmenu" id="Sintomas" style="background:url('img/ainter/bg/Sintomas.jpg');display:none;" onClick="dimiss('sintomainfo')">
		<div class="infoabout" onClick="dimiss('sintomainfo')" id="sintomainfo" style="z-index:999;">Clique em um dos sintomas para mais informações sobre ele<br>Passe o mouse sobre uma doença e saiba seu tempo de duração</div>
		<div class="nextbutton" style="top:423px;left:650px;font-size:18px;color:#0de0ec;" onClick="showmenu('Sintomas','sintomasFinish');">Próximo</div>
		<img src="img/ainter/project/Man3dBodyModel.png" style="top:87px;left:52px;position:absolute;">
		
		<div id="SintInfo" class="SintInfo">
			<h3 id="SintTitle"></h3><br>
			<span id="SintDetail"></span>
			<p style="color:#036;">
				<label id="SintDengue"></label><br>
				<label id="SintZika"></label><br>
				<label id="SintChik"></label>
			</p>
		</div>
		
		<div class="LitIndic" style="top:135px;left:270px;" onClick="setSint('Dores de Cabeça','Presente em todas as doenças','<b>Dengue: </b>Intensa','<b>Zika: </b>Moderada','<b>Chikungunya: </b>Moderada','SintDengue');"></div>
		<div class="LitIndic" style="top:152px;left:249px;" onClick="setSint('Dores nos Olhos','Presente na Dengue e Zika. Piora com o movimento ocular','<b>Dengue: </b>Intensa','<b>Zika: </b>Moderada','<b>Chikungunya: </b>Leve','SintDengue');"></div>
		<div class="LitIndic" style="top:176px;left:235px;" onClick="setSint('Náuseas e Vômitos','Presente na Dengue','<b>Dengue: </b>Frequente','<b>Zika: </b>Raro','<b>Chikungunya: </b>Raro','SintDengue');"></div>
		<div class="LitIndic" style="top:299px;left:186px;" onClick="setSint('Dores Articulares','Presentes principalmente na Chikungunya, mas podem aparecer em outras doenças','<b>Dengue: </b>Leve','<b>Zika: </b>Medias','<b>Chikungunya: </b>Fortes e Intensas','SintChik');"></div>
		<div class="LitIndic" style="top:336px;left:319px;" onClick="setSint('Coceiras','Presente principalmente na Zika, mas aparecem em outras','<b>Dengue: </b>Leve','<b>Zika: </b>Média ou Forte','<b>Chikungunya: </b>Leve','SintZika');"></div>
		
		<div class="BigIndic" style="top:126px;left:234px;" onClick="setSint('Febre','Presente na Dengue e na Chikungunya, raros casos na Zika','<b>Dengue: </b>Alta, de rápido início, 38ºC','<b>Zika: </b>Ausente ou Leve','<b>Chikungunya: </b>Alta, >38ºC','SintDengue');"></div>
		<div class="BigIndic" style="top:222px;left:281px;" onClick="setSint('Manchas na Pele','Aparecem principalmente na Zika, e em alguns casos de outras doenças','<b>Dengue: </b>Apartir do 5º dia (30%-50% dos casos)','<b>Zika: </b>Frequente, a partir do 1º ou 2º dia (90 à 100% dos casos)','<b>Chikungunya: </b>Em 50% dos casos','SintZika');"></div>
		<div class="BigIndic" style="top:234px;left:187px;" onClick="setSint('Inchaços Articulares','Principalmente na Chikungunya, demoram a desaparecer','<b>Dengue: </b>Raro','<b>Zika: </b>Leve e Frequente','<b>Chikungunya: </b>Forte, Frequente e Duradoura','SintChik');"></div>
		<div class="BigIndic" style="top:264px;left:304px;" onClick="setSint('Dores Musculares','Presente na Dengue e na Chikungunya','<b>Dengue: </b>Forte','<b>Zika: </b>Médias','<b>Chikungunya: </b>Fortes','SintChik');"></div>
		
		<div class="NavIndic" style="width:80px;left:210px;" onMouseOver="durationShow('DengueDurat');" onMouseOut="durationHide();"></div>
		<div class="NavIndic" style="width:56px;left:301px;" onMouseOver="durationShow('ZikaDurat');" onMouseOut="durationHide();"></div>
		<div class="NavIndic" style="width:113px;left:366px;" onMouseOver="durationShow('ChikDurat');" onMouseOut="durationHide();"></div>
		
		<div class="DurationDoen" style="top:360px;left:195px;" id="DengueDurat">Entre 2 à 7 dias</div>
		<div class="DurationDoen" style="top:360px;left:275px;" id="ZikaDurat">Entre 3 à 7 dias</div>
		<div class="DurationDoen" style="top:360px;left:367px;" id="ChikDurat">Entre 3 à 10 dias</div>
	</div>
	
	<!-- Sobre a Prevenção -->
	
	<div class="mainmenu" id="Prevenir" style="background:url('img/ainter/bg/Prevenir.jpg');display:none;" onClick="dimiss('preventinfo')">
		<div class="infoabout" onClick="dimiss('preventinfo')" id="preventinfo" style="z-index:999;">Após ler sobre a medida de prevenção, clique em "Próximo" para avançar</div>
		<div class="nextbutton" style="top: 410px;left: 357px;font-size:18px;color: #988c66;" onClick="prevenct()">Próximo</div>
		<span style="top:100px;right:45px;position:absolute;"><label id="numberPrv">1</label>/15</span>
		<img src="img/ainter/project/prev/1.png" style="top: 150px;left:140;position:absolute;" id="previmg">
		<span style="color:#333;top: 185px;left: 54%;font-size: 21px;position: absolute;width: 250px;" id="prevmaindata">Mantenha lixeiras, toneis e caixas d'água bem tampadas</span>
		<span style="color:#FFF;top: 300px;left: 54%;font-size: 15px;position: absolute;width: 250px;" id="prevsecdata">O mosquito pode depositar seus ovos próximo a essas águas</span>
		
	</div>
	
	<!-- Concluindo -->
	
	
	<div id="doencaFinish" class="mainmenu" style="background:url('img/ainter/bg/doencasmainbg.jpg');display:none;">
		<img src="img/ainter/project/doencaicon.png" class="iconimg" id="doencaimg" style="top:152px;left:115px;">
		<div class="titlemain" id="title">
			<span>O problema:</span>
			<h1>As doenças</h1>
			<h2 style="margin-top:30px;font-size:18px;">Módulo terminado com sucesso!</h2>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#F66;" onClick="showmenu('doencaFinish','mainmenu');finishModule();">Próximo</div>
	</div>
	
	<div id="aedesFinish" class="mainmenu" style="background:url('img/ainter/bg/aedesmainbg.jpg');display:none;">
		<img src="img/ainter/project/aedesicon.png" class="iconimg" id="aedesimg" style="top:114px;left:91px;">
		<div class="titlemain" id="title">
			<span>O causador:</span>
			<h1>O Aedes aegypti</h1>
			<h2 style="margin-top:30px;font-size:18px;">Módulo terminado com sucesso!</h2>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#0FF;" onClick="showmenu('aedesFinish','mainmenu');finishModule();">Próximo</div>
	</div>
	
	<div id="sintomasFinish" class="mainmenu" style="background:url('img/ainter/bg/sintomasmainbg.jpg');display:none;">
		<img src="img/ainter/project/sintomasicon.png" class="iconimg" id="aedesimg" style="top:144px;left:144px;">
		<div class="titlemain" id="title">
			<span>Identificando</span>
			<h1>Os Sintomas</h1>
			<h2 style="margin-top:30px;font-size:18px;">Módulo terminado com sucesso!</h2>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#FF0;" onClick="showmenu('sintomasFinish','mainmenu');finishModule();">Próximo</div>
	</div>
	
	<div id="precaFinish" class="mainmenu" style="background:url('img/ainter/bg/precamainbg.jpg');display:none;">
		<img src="img/ainter/project/precaicon.png" class="iconimg" id="aedesimg" style="left:86px;top:146px;">
		<div class="titlemain" id="title">
			<span>Tomando</span>
			<h1>As Precauções</h1>
			<h2 style="margin-top:30px;font-size:18px;">Módulo terminado com sucesso!</h2>
		</div>
		<div class="nextbutton" style="top:400px;left:612px;font-size:18px;color:#6F6;" onClick="showmenu('precaFinish','mainmenu');finishModule();">Próximo</div>
	</div>
	
	
</body>
</html>
