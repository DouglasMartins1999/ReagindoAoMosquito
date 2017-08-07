<html>
<head>
<title>Aprendizagem Interativa</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
<style>
	body {
		margin:0;
		padding:0;
		font-family:'Open Sans', Tahoma, sans-serif;
	}
	.cont {
		width:100%;
		height:100%;
		position:absolute;
		top:0;
		left:0;
		z-index:997;
	}
	.mainmenu {
		background:url('img/ainter/mobile/bg.jpg');
	}
	.background {
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-size:cover;
		background-position:center;
	}
	.logomain {
		width:70%;
		margin:15%;
		position:absolute;
	}
	.options {
		position:absolute;
		bottom:5%;
		height:50%;
		width:100%;
		border-left:1px solid #555;
		box-sizing:border-box;
	}
	.basebutton {
		width:50%;
		height:50%;
		border-top:1px solid #555;
		border-right:1px solid #555;
		float:left;
		box-sizing:border-box;
		padding: 7% 10%;
		text-align: center;
		line-height: 2;
		color: #FFF;
	}
	.basebutton img {
		height: 70%;
	}
	.redbasebg {
		background:#E1194B;
	}
	.yellowbasebg {
		background:#E5BC00;
	}
	.greenbasebg {
		background:#117755;
	}
	.bluebasebg {
		background:#2AA8A8;
	}
	.redbasebg:disabled {
		background:#999;
		color:#BBB;
	}
	.yellowbasebg:disabled {
		background:#999;
		color:#BBB;
	}
	.greenbasebg:disabled {
		background:#999;
		color:#BBB;
	}
	.bluebasebg:disabled {
		background:#999;
		color:#BBB;
	}
	.proxbuttondiv {
		width:100%;
		height:15%;
		background:#AAAAAA;
		position: relative;
	}
	.proxbuttondiv button {
		width: 60%;
		height: 60%;
		border: 0;
		margin: 0 20%;
		box-sizing: border-box;
		font-family: 'Open Sans';
		color: #FFF;
		font-size: 1em;
		top: 50%;
		position: relative;
		transform: translateY(-50%);
	}
	.adverbg {
		width:100%;
		height:60%;
		top:0;
		left:0;
		position:relative;
		text-align:center;
	}
	.adverbg img {
		height:60%;
		max-width:60%;
		margin:20%;
	}
	.advers {
		width:100%;
		height:25%;
		background:#333;
		padding:10%;
		box-sizing:border-box;
		color:#FFF;
		line-height: 1;
	}
	.advers label {
		line-height: 1.3;
		font-size: 14px;
	}
	h1, h2, h3, h4 {
		margin:0;
	}
	.redbgadd {
		background:url('img/ainter/mobile/bg/bgred.jpg');
	}
	.yellowbgadd {
		background:url('img/ainter/mobile/bg/bgyellow.jpg');
	}
	.greenbgadd {
		background:url('img/ainter/mobile/bg/bggreen.jpg');
	}
	.bluebgadd {
		background:url('img/ainter/mobile/bg/bgblue.jpg');
	}
	.none {
		display:none;
	}
	.topbar {
		width: 100%;
		height: 10%;
		color: #FFF;
		text-align:center;
		line-height:1.9;
	}
	.topbar h1 {
		font-weight:300;
		font-size:1.5em;
	}
	.inBrasil {
		background:url('img/ainter/mobile/nobrasil.jpg');
		background-size:cover;
		background-position:bottom;
		width:100%;
		height:20%;
		opacity:0.3;
		transition:all 300ms ease;
	}
	.inWorld {
		background:url('img/ainter/mobile/nomundo.jpg');
		background-size:cover;
		background-position:bottom;
		width:100%;
		height:20%;
		opacity:0.3;
		transition:all 300ms ease;
	}
	.inEgito {
		background:url('img/ainter/mobile/noaedes.jpg');
		background-size:cover;
		background-position:bottom;
		width:100%;
		height:20%;
		opacity:0.3;
		transition:all 300ms ease;
	}
	.origin {
		height:35%;
		background:#EEE;
		color:#333;
	}
	.graybg {
		background:#333;
	}
	.graybasebg {
		background:rgba(0,0,0,0.5);
		position:absolute;
		bottom:0;
		height:45px;
	}
	.aedesbgabout {
		background:url('img/ainter/mobile/aedesabout.jpg');
		background-size:cover;
		background-position:center;
	}
	.habits {
		width:25%;
		float:left;
		height:100%;
		box-sizing:border-box;
		cursor:pointer;
		transition:all 500ms ease;
	}
	.years {
		display:inline-block;
		color: #FFF;
		margin: 2% 2%;
		background: rgba(255,255,255,0.5);
		padding: 2% 4%;
		border-radius: 3px;
		text-align:center;
		transition:all 400ms ease-in-out;
	}
	.cicle {
		padding: 5% 9%;
	}
	.dur {
		display:block;
	}
	.labelsucess {
		font-weight:300;
		font-size:13px;
		position:absolute;
		top:0;
		left:0;
		padding:20px;
		background:rgba(0,0,0,0.4);
		width:100%;
		box-sizing:border-box;
		text-align:center;
	}
	.habimg {
		opacity:0;
		position:absolute;
		width:100%;
		transition:all 500ms ease;
	}
	.stmico {
		width: 16px;
		height: 16px;
		position: relative;
	}
	.charsicon {
		color: #666;
		background: rgba(255,255,255,0.8);
		padding: 5px 12px;
		border-radius: 3px;
		text-align: center;
		font-size: 1em;
		font-weight: 300;
		transition: all 400ms ease-in-out;
		display: inline-block;
		position: relative;
	}
	#stmtxt label {
		color: #94B9D5;
	}
	#stmtxt .redstm {
		color: #FF6363;
	}
</style>
<script>
	function fullscreen(begin){
	elem = document.getElementById("body");
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
	function showmenu(hide,show){
		document.getElementById(hide).style.display = "none";
		document.getElementById(show).style.display = "block";
	}
	var denginfo = [false,false];
	var zikainfo = [false,false];
	var chikinfo = [false,false];
	var aedesinfo = [false,false];
	function world(show,hide){
		on = document.getElementById(show);
		off = document.getElementById(hide);
		on.style.height = '35%';
		off.style.height = '5%';
		on.style.opacity = '1';
		off.style.opacity = '0.4';
		
		switch(show){
			case 'inWorld1':
				document.getElementById('dengOr').innerHTML = 'Não há evidências significativas da origem da Dengue. Mas existem teorias que ela tenha surgido entre as regiões da <b>Uganda, Tanzânia e do Quênia na Africa</b>, e se espalhou pelo mundo com o avanço das grandes navegações no <b>Século XV e XVI</b>.';
				denginfo[1] = true;
				break;
			case 'inBrazil1':
				document.getElementById('dengOr').innerHTML = 'Os primeiros casos de dengue no Brasil surgiram em <b>Curitiba/PR</b> no <b>final do século XIX</b>. No <b>século seguinte</b>, os primeiros casos surgiram no <b>Rio de Janeiro</b>. O seu transmissor (<i>Aedes aegypti</i>) foi erradicado do Brasil na década de 50, mas na decada seguinte o mosquito retornou ao país.';
				denginfo[0] = true;
				break;
			case 'inWorld2':
				document.getElementById('zikaOr').innerHTML = 'O Zika Vírus foi identificado pela primeira vez em <b>1947</b> na <b>floresta de Zika, em Uganda (África)</b> em macacos. O primeiro caso de infecção pelo vírus em humanos se dá pelo <b>final da década de 50</b>. Epidemias de zika vírus eram raras, a primeira registrada foi em <b>2007</b>, na <b>Micronésia</b>.';
				zikainfo[1] = true;
				break;
			case 'inBrazil2':
				document.getElementById('zikaOr').innerHTML = 'Embora o vírus da Zika só tenha sido confirmado em território nacional em <b>Maio de 2015</b>, já existiam evidências da existência do vírus no Brasil em <b>2014</b>. Os primeiros relatos apareceram na <b>região nordeste</b>, e de lá se espalhou para outras regiões.';
				zikainfo[0] = true;
				break;
			case 'inWorld3':
				document.getElementById('chikOr').innerHTML = 'A febre Chikungunya foi identificada primeiramente na <b>Tanzânia (África) no ano de 1952</b>. Desde então, houveram outros casos isolados da doença na Ásia e na Oceania. Uma das maiores epidemias ocorreram em <b>2006 na Índia</b>, com <b>1,5 milhÃ£o</b> de vítimas.';
				chikinfo[1] = true;
				break;
			case 'inBrazil3':
				document.getElementById('chikOr').innerHTML = 'O primeiro caso no Brasil ocorreu em 2010 em São Paulo, de um paciente após uma viagem a Indonésia. Em 2014, durante a Copa do Mundo, ocorreram alguns casos isolados. Entretanto, alguns meses depois, centenas de casos foram relatados, grande parte deles apenas na cidade de Feira de Santana (BA).';
				chikinfo[0] = true;
				break;
			case 'inWorld4':
				document.getElementById('aedesOr').innerHTML = 'Acredita-se que o mosquito tenha se originado no <b>Egito</b> e de lá tenha se espalhado para outros países tropicais. Há registros de casos de Dengue desde o <b>Século 18 na Ásia e América do Norte</b>.';
				aedesinfo[1] = true;
				break;
			case 'inBrazil4':
				document.getElementById('aedesOr').innerHTML = 'No Brasil, os primeiros registros de doenças causadas pelo Aedes aegypti são dos <b>séculos 19 (Em Curitiba)</b> e <b>20 (No Rio de Janeiro)</b>. É provável que o <b>tráfico de escravos</b> tenha trazido o mosquito da África para o país.';
				aedesinfo[0] = true;
				break;
			default:
				break;
		}
		
		if(denginfo[0] == true && denginfo[1] == true){
			document.getElementById('dengbutt').disabled = false;
		}
		if(zikainfo[0] == true && zikainfo[1] == true){
			document.getElementById('zikabutt').disabled = false;
		}
		if(chikinfo[0] == true && chikinfo[1] == true){
			document.getElementById('chikbutt').disabled = false;
		}
		if(aedesinfo[0] == true && aedesinfo[1] == true){
			document.getElementById('aedesbutt').disabled = false;
		}
	}
	var habt1 = false;
	var habt2 = false;
	var habt3 = false;
	var habt4 = false;
	function habit(number){
		varable = 'habimg' + number;
		document.getElementById('habimg1').style.opacity = '0';
		document.getElementById('habimg2').style.opacity = '0';
		document.getElementById('habimg3').style.opacity = '0';
		document.getElementById('habimg4').style.opacity = '0';
		document.getElementById(varable).style.opacity = '1';
		
		nvar = 'hab' + number;
		document.getElementById('hab1').style.background = '#E1194B';
		document.getElementById('hab2').style.background = '#E1194B';
		document.getElementById('hab3').style.background = '#E1194B';
		document.getElementById('hab4').style.background = '#E1194B';
		document.getElementById(nvar).style.background = '#AA002A';
		
		var txt = document.getElementById('habtstxt');
		switch (number){
			case '1':
				txt.innerHTML = 'Geralmente, o <i>Aedes aegypti</i> ataca de dia. Durante a força do sol, o mosquito busca abrigo a sombra de árvores e dentro de casas. Normalmente, a picada ocorre no <b>começo da manhã</b> e nos <b>fins de tardes</b>.';
				habt1 = true;
				break;
			case '2':
				txt.innerHTML = 'O mosquito se alimenta de matéria orgânica (Como nectares). <b>Apenas a fêmea</b> se alimenta de sangue, pois nele há uma proteína que ajuda no desenvolvimento dos ovos.';
				habt2 = true;
				break;
			case '3':
				txt.innerHTML = 'A fêmea transmite o vírus no momento da picada. Quando ela se alimenta de sangue, a salíva do mosquito entra em contato com o organismo, e <b>é na saliva que o vírus se encontra</b>.';
				habt3 = true;
				break;
			case '4':
				txt.innerHTML = 'O mosquito tem vôo raso. Geralmente não ultrapassa 1,5 metro de altura. Entretanto, a fêmea costuma percorrer longas distâncias para depositar seus ovos.';
				habt4 = true;
				break;
			default:
				break;
		}
		
		if(habt1 == true && habt2 == true && habt3 == true && habt4 == true){
			document.getElementById('habtbutt').disabled = false;
		}
	}
	var year = [false,false,false,false,false,false,false,false,false,false];
	function yr(yrs){
		bgoriginal = 'rgba(255,255,255,0.5)';
		bgchange = 'rgba(0,0,0,0.5)';
		document.getElementById('year1').style.background = bgoriginal;
		document.getElementById('year2').style.background = bgoriginal;
		document.getElementById('year3').style.background = bgoriginal;
		document.getElementById('year4').style.background = bgoriginal;
		document.getElementById('year5').style.background = bgoriginal;
		document.getElementById('year6').style.background = bgoriginal;
		document.getElementById('year7').style.background = bgoriginal;
		document.getElementById('year8').style.background = bgoriginal;
		document.getElementById('year9').style.background = bgoriginal;
		document.getElementById('year10').style.background = bgoriginal;
		document.getElementById(yrs).style.background = bgchange;
		
		var txt = document.getElementById('yearstxt');
		switch (yrs){
			case 'year1':
				txt.innerHTML = 'Foi registrado oficialmente pelo nome de <b><i>Culex aegypti</i></b>';
				year[0] = true;
				break;
			case 'year2':
				txt.innerHTML = 'Passou a ser conhecido por <i>Aedes aegypti</i> por se assimilar ao gênero <i>Aedes</i>';
				year[1] = true;
				break;
			case 'year3':
				txt.innerHTML = 'Primeiro caso de dengue no Brasil em Recife/PE';
				year[2] = true;
				break;
			case 'year4':
				txt.innerHTML = 'Primeira epidemia de dengue: Em salvador com cerca de 2.000 mortes';
				year[3] = true;
				break;
			case 'year5':
				txt.innerHTML = 'Primeiro caso identificado de Chikungunya na África';
				year[4] = true;
				break;
			case 'year6':
				txt.innerHTML = 'Primeiro caso de Zika na Africa';
				year[5] = true;
				break;
			case 'year7':
				txt.innerHTML = 'O Aedes aegypti é erradicado do Brasil por medidas contra a Febre Amarela';
				year[6] = true;
				break;
			case 'year8':
				txt.innerHTML = 'O mosquito retorna ao país pelas fronteiras de países não erradicados';
				year[7] = true;
				break;
			case 'year9':
				txt.innerHTML = 'Primeiro caso registrado no Brasil de Chikungunya';
				year[8] = true;
				break;
			case 'year10':
				txt.innerHTML = 'Primeiros casos de Zika registrados no Brasil';
				year[9] = true;
				break;
			default:
				break;
		}
		
		if(year[0] == true && year[1] == true && year[2] == true && year[3] == true && year[4] == true && year[5] == true && year[6] == true && year[7] == true && year[8] == true && year[9] == true){
			document.getElementById('yearbutt').disabled = false;
		}
	}
	
	var cicle = [false,false,false,false,false,false,false];
	function crl(crldt){
		bgoriginal = 'rgba(255,255,255,0.5)';
		bgchange = 'rgba(0,0,0,0.5)';
		document.getElementById('cicle1').style.background = bgoriginal;
		document.getElementById('cicle2').style.background = bgoriginal;
		document.getElementById('cicle3').style.background = bgoriginal;
		document.getElementById('cicle4').style.background = bgoriginal;
		document.getElementById('cicle5').style.background = bgoriginal;
		document.getElementById('cicle6').style.background = bgoriginal;
		document.getElementById('cicle7').style.background = bgoriginal;
		document.getElementById(crldt).style.background = bgchange;
		
		var txt = document.getElementById('crltxt');
		switch (crldt){
			case 'cicle1':
				txt.innerHTML = 'A vida adulta do mosquito, que dura cerca de 50 dias.<br><b>Curiosidade:</b> Durante ela, o mosquito pode depositar ovos inúmeras vezes.';
				cicle[0] = true;
				break;
			case 'cicle2':
				txt.innerHTML = 'Acasalamento<br><b>Curiosidade:</b> Acontece em até 24h depois do nascimento';
				cicle[1] = true;
				break;
			case 'cicle3':
				txt.innerHTML = 'Picada<br><b>Curiosidade:</b> Para coletar sangue para desenvolver os ovos';
				cicle[2] = true;
				break;
			case 'cicle4':
				txt.innerHTML = 'Postura dos ovos <br><b>Curiosidade:</b> Ocorre em locais <b>próximos a água</b>';
				cicle[3] = true;
				break;
			case 'cicle5':
				txt.innerHTML = 'Desenvolvimento do Embrião <br><b>Curiosidade:</b> 30 minutos após os ovos cairem na água</b>';
				cicle[4] = true;
				break;
			case 'cicle6':
				txt.innerHTML = 'Crescimento da larva <br><b>Curiosidade:</b> Ocorre em até 5 dias</b>';
				cicle[5] = true;
				break;
			case 'cicle7':
				txt.innerHTML = 'Maturação e eclosão';
				cicle[6] = true;
				break;
			default:
				break;
		}
		
		if(cicle[0] == true && cicle[1] == true && cicle[2] == true && cicle[3] == true && cicle[4] == true && cicle[5] == true && cicle[6] == true){
			document.getElementById('crlbutt').disabled = false;
		}
	}
	var durt = [false,false,false];
	function dur(no){
		bgoriginal = 'rgba(255,255,255,0.5)';
		bgchange = 'rgba(0,0,0,0.5)';
		document.getElementById('dur1').style.background = bgoriginal;
		document.getElementById('dur2').style.background = bgoriginal;
		document.getElementById('dur3').style.background = bgoriginal;
		document.getElementById(no).style.background = bgchange;
		
		var txt = document.getElementById('durtxt');
		switch (no){
			case 'dur1':
				txt.innerHTML = '<b>Duração:</b> Entre 2 a 7 dias';
				durt[0] = true;
				break;
			case 'dur2':
				txt.innerHTML = '<b>Duração:</b> Entre 3 a 7 dias';
				durt[1] = true;
				break;
			case 'dur3':
				txt.innerHTML = '<b>Duração:</b> Entre 3 a 10 dias';
				durt[2] = true;
				break;
			default:
				break;
		}
		
		if(durt[0] == true && durt[1] == true && durt[2] == true){
			document.getElementById('durbutt').disabled = false;
		}
	}
	var preven = 0;
	function prev(){		
		if(preven == 0){
			document.getElementById('prevbutt').innerHTML = "Próximo";
		}	
		
		preven++;
		if(preven == 16){
			showmenu('Prevent','precaFinish');
		}
		now = 'previmg' + preven;
		document.getElementById('previmg1').style.opacity = '0';
		document.getElementById('previmg2').style.opacity = '0';
		document.getElementById('previmg3').style.opacity = '0';
		document.getElementById('previmg4').style.opacity = '0';
		document.getElementById('previmg5').style.opacity = '0';
		document.getElementById('previmg6').style.opacity = '0';
		document.getElementById('previmg7').style.opacity = '0';
		document.getElementById('previmg8').style.opacity = '0';
		document.getElementById('previmg9').style.opacity = '0';
		document.getElementById('previmg10').style.opacity = '0';
		document.getElementById('previmg11').style.opacity = '0';
		document.getElementById('previmg12').style.opacity = '0';
		document.getElementById('previmg13').style.opacity = '0';
		document.getElementById('previmg14').style.opacity = '0';
		document.getElementById('previmg15').style.opacity = '0';
		document.getElementById(now).style.opacity = '1';
		
		var txt = document.getElementById('precatxt')
		switch(preven){
			case 1:
				txt.innerHTML = "<b>Mantenha lixeiras, toneis e caixas d'água bem tampadas</b><br><br>O mosquito pode depositar seus ovos próximo a essas águas";
				break;
			case 2:
				txt.innerHTML = '<b>Mantenha calhas sempre limpas e livre de resíduos</b><br><br>A presença de folhas e outras impurezas nelas impedem a passagem de água.';
				break;
			case 3:
				txt.innerHTML = '<b>Lave recipientes que acumulam água com frequência</b><br><br>Bebedouros e tigelas de animais são exemplos que devemos estar atentos';
				break;
			case 4:
				txt.innerHTML = '<b>Mantenha vasos de plantas com pouca água</b><br><br>Assim como a planta precisa de água para viver, o mosquito também precisa dela para se reproduzir';
				break;
			case 5:
				txt.innerHTML = '<b>Encha os pratos de vasos de plantas com areia</b><br><br>E encha-os até a borda, para evitar acumular água neles';
				break;
			case 6:
				txt.innerHTML = '<b>Mantenha lajes, áreas de serviço, entre outros sempre secas</b><br><br>Mesmo que a água esteja no chão, ela pode ainda servir de foco do mosquito por estar parada';
				break;
			case 7:
				txt.innerHTML = '<b>Mantenha ralos limpos e protegidos</b><br><br>Eles estão sempre com água, por isso devem estar limpos para evitar algo pior.';
				break;
			case 8:
				txt.innerHTML = '<b>Mantenha garrafas sempre bem tampadas ou viradas para baixo.</b><br><br>Elas podem guardar água da chuva que seria útil ao Aedes.';
				break;
			case 9:
				txt.innerHTML = '<b>Higienize potes de água com frequência.</b><br><br>Animais domésticos precisam de água para beber, então pelo menos mantenha o prato limpinho';
				break;
			case 10:
				txt.innerHTML = '<b>Descarte pneus velhos ou mantenha-os sobre abrigo seco.</b><br><br>Assim como as garrafas, eles podem guardar água da chuva, o que não é nada bom';
				break;
			case 11:
				txt.innerHTML = '<b>Troque a água de aquários e de plantas aquáticas com frequência</b><br><br>Eles podem ser um lugar apreciável para o mosquito depositar seus ovos';
				break;
			case 12:
				txt.innerHTML = '<b>Evite cultivar plantas como babosa, bromélias ou espadas de São Jorge</b><br><br>Essas plantas acumulam água em seu interior, o que pode não ser uma boa idéia';
				break;
			case 13:
				txt.innerHTML = '<b>Guarde o lixo em sacos plásticos bem fechados</b><br><br>Se não estiver bem fechados, o lixo pode servir de criadouro ao mosquito';
				break;
			case 14:
				txt.innerHTML = '<b>Evite jogar lixo em terrenos baldios</b><br><br>Além de não ser nada bonito, o lixo pode ser um bom aperitivo para o Aedes';
				break;
			case 15:
				txt.innerHTML = '<b>Use repelente... Mas faça mais</b><br><br>O efeito do repelente é temporário. Quando ele acabar, você está sucetível novamente.';
				break;
		}
	}
	
	var stms = [false,false,false,false,false,false,false,false,false];
	function sintoma(stm){
		var txt = document.getElementById('stmtxt');
		switch (stm){
			case 'febre':
				txt.innerHTML = '<b>Febre</b><br>Presente na Dengue e na Chikungunya, raros casos na Zika<br><br><label class="redstm"><b>Dengue:</b> Alta, de rápido início, 38ºC</label><br><label><b>Zika:</b> Ausente ou Leve</label><br><label><b>Chikungunya:</b> Alta, >38ºC</label>';
				stms[0] = true;
				break;
			case 'dCabeca':
				txt.innerHTML = '<b>Dores de Cabeça</b><br>Presente em todas as doenças<br><br><label class="redstm"><b>Dengue:</b> Intensa, 38ºC</label><br><label><b>Zika:</b> Moderada</label><br><label><b>Chikungunya:</b> Moderada</label>';
				stms[1] = true;
				break;
			case 'vomitos':
				txt.innerHTML = '<b>Náuseas e Vômitos</b><br>Presente na Dengue<br><br><label class="redstm"><b>Dengue:</b> Frequente</label><br><label><b>Zika:</b> Raro</label><br><label><b>Chikungunya:</b> Raro</label>';
				stms[2] = true;
				break;
			case 'dOlhos':
				txt.innerHTML = '<b>Dores nos Olhos</b><br>Presente na Dengue e Zika. Piora com o movimento ocular.<br><br><label class="redstm"><b>Dengue:</b> Intensa</label><br><label><b>Zika:</b> Moderada</label><br><label><b>Chikungunya:</b> Leve</label>';
				stms[3] = true;
				break;
			case 'mNpele':
				txt.innerHTML = '<b>Manchas na Pele</b><br>Aparecem principalmente na Zika, e em alguns casos de outras doenças<br><br><label><b>Dengue:</b> A partir do 5º dia (30%-50%)</label><br><label class="redstm"><b>Zika:</b> Frequente, a partir do 1º ou 2º dia (90 à 100%)</label><br><label><b>Chikungunya:</b> Em 50% dos casos</label>';
				stms[4] = true;
				break;
			case 'dMusculares':
				txt.innerHTML = '<b>Dores Musculares</b><br>Presente na Dengue e na Chikungunya<br><br><label class="redstm"><b>Dengue:</b> Forte</label><br><label><b>Zika:</b> Média</label><br><label class="redstm"><b>Chikungunya:</b> Forte</label>';
				stms[5] = true;
				break;
			case 'coceira':
				txt.innerHTML = '<b>Coceiras</b><br>Presente principalmente na Zika, mas aparecem em outras<br><br><label><b>Dengue:</b> Leve</label><br><label class="redstm"><b>Zika:</b> Média ou Forte</label><br><label><b>Chikungunya:</b> Leve</label>';
				stms[6] = true;
				break;
			case 'dArticulares':
				txt.innerHTML = '<b>Dores Articulares</b><br>Presentes principalmente na Chikungunya, mas podem aparecer em outras doenças<br><br><label><b>Dengue:</b> Leve</label><br><label><b>Zika:</b> Médias</label><br><label class="redstm"><b>Chikungunya:</b> Fortes e Intensas</label>';
				stms[7] = true;
				break;
			case 'iArticulares':
				txt.innerHTML = '<b>Inchaços Articulares</b><br>Principalmente na Chikungunya, demoram a desaparecer<br><br><label><b>Dengue:</b> Raro</label><br><label><b>Zika:</b> Leve e Frequente</label><br><label class="redstm"><b>Chikungunya:</b> Forte, Frequente e Duradoura</label>';
				stms[8] = true;
				break;
			default:
				break;
		}
		
		if(stms[0] == true && stms[1] == true && stms[2] == true && stms[3] == true && stms[4] == true && stms[5] == true && stms[6], stms[7] == true && stms[8] == true){
			document.getElementById('stmbutt').disabled = false;
		}
	}
	var modulesarry = [false,false,false,false];
	function finishModule(module){
		switch(module){
			case 'doencas':
				modulesarry[0] = true;
				break;
			case 'aedes':
				modulesarry[1] = true;
				break;
			case 'sintomas':
				modulesarry[2] = true;
				break;
			case 'preca':
				modulesarry[3] = true;
				break;
		}
		
		if(modulesarry[0] == true && modulesarry[1] == true && modulesarry[2] == true && modulesarry[3] == true){
			location.reload();
		}
	}
	var crts = [false,false,false,false,false];
	function char(crtdt){
		bgoriginal = 'rgba(255,255,255,0.5)';
		bgchange = 'rgba(0,0,0,0.5)';
		chtdt = 'char' + crtdt;
		document.getElementById('char1').style.background = bgoriginal;
		document.getElementById('char2').style.background = bgoriginal;
		document.getElementById('char3').style.background = bgoriginal;
		document.getElementById('char4').style.background = bgoriginal;
		document.getElementById('char5').style.background = bgoriginal;
		document.getElementById(chtdt).style.background = bgchange;
		
		var txt = document.getElementById('chartxt');
		switch (crtdt){
			case '1':
				txt.innerHTML = 'Ele é fácilmente diferenciado de outras espécies de mosquito por suas manchas brancas rajadas que aparecem na cabeça, no dorso e nas pernas do mosquito.';
				crts[0] = true;
				break;
			case '2':
				txt.innerHTML = 'Seu vôo é silencioso, de modo que não é capaz de ser ouvido pelo ouvido humano.';
				crts[1] = true;
				break;
			case '3':
				txt.innerHTML = 'Apenas a fêmea se alimenta de sangue. No momento da picada, o mosquito injeta no sangue humano uma substância anestésica, que faz com que a pessoa não sinta dor nem coceira com o ataque.';
				crts[2] = true;
				break;
			case '4':
				txt.innerHTML = 'Diferentemente do mosquito comum, o <i>Aedes aegypti</i> tem uma cor mais escura, quase preta.';
				crts[3] = true;
				break;
			case '5':
				txt.innerHTML = 'Seu tamanho é bem pequeno, chegando ser menor que o mosquito comum.';
				crts[4] = true;
				break;
			default:
				break;
		}
		
		if(crts[0] == true && crts[1] == true && crts[2] == true && crts[3] == true && crts[4] == true){
			document.getElementById('charbutt').disabled = false;
		}
	}
</script>
</head>
<body id="body">
	<div class="mainmenu background cont" id="mainmenu">
		<img src="img/ainter/mobile/logo.png" class="logomain" id="logomain" onClick="fullscreen();">
		<div class="options">
			<div id="doencaidbutton" class="basebutton redbasebg" onClick="showmenu('mainmenu','doencamain');fullscreen();">
				<img src="img/ainter/project/doencaicon.png"><br><label>Doenças</label>
			</div>
    		<div id="aedesidbutton" class="basebutton yellowbasebg" onClick="showmenu('mainmenu','aedesmain');fullscreen();"> 
      			<img src="img/ainter/project/aedesicon.png"><br><label>O Aedes</label>
			</div>
			<div id="sintomasidbutton" class="basebutton greenbasebg" onClick="showmenu('mainmenu','sintomasmain');fullscreen();">
				<img src="img/ainter/project/sintomasicon.png"><br><label>Sintomas</label>
			</div>
			<div id="precaidbutton" class="basebutton bluebasebg" onClick="showmenu('mainmenu','precamain');fullscreen();">
				<img src="img/ainter/project/precaicon.png"><br><label>Precaução</label>
			</div>
		</div>
	</div>
	<div class="cont none" id="doencamain">
		<div class="background redbgadd adverbg">
			<img src="img/ainter/project/doencaicon.png">
		</div>
		<div class="advers">
			<label>O Problema:</label>
			<h1>As Doenças</h1>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="redbasebg" onClick="showmenu('doencamain','DengueOrigin');">Próximo</button>
  </div>
	</div>
	<div class="cont none" id="aedesmain">
		<div class="background yellowbgadd adverbg">
			<img src="img/ainter/project/aedesicon.png">
		</div>
		<div class="advers">
			<label>O Causador:</label>
		    <h1>O <i>A. aegypti</i></h1>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="yellowbasebg" onClick="showmenu('aedesmain','AboutAedes');">Próximo</button>
  </div>
	</div>
	<div class="cont none" id="sintomasmain">
		<div class="background greenbgadd adverbg">
			<img src="img/ainter/project/sintomasicon.png">
		</div>
		<div class="advers">
			<label>Identificando:</label>
		    <h1>Os Sintomas</h1>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="greenbasebg" onClick="showmenu('sintomasmain','Sintoma');">Próximo</button>
  </div>
	</div>
	<div class="cont none" id="precamain">
		<div class="background bluebgadd adverbg">
			<img src="img/ainter/project/precaicon.png">
		</div>
		<div class="advers">
			<label>Tomando</label>
		    <h1>As Precauções</h1>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="bluebasebg" onClick="showmenu('precamain','Prevent');">Próximo</button>
  </div>
	</div>
	<!-- Sobre as Doenças-->
	<div class="cont graybg none" id="DengueOrigin">
		<div class="topbar redbasebg"><h1>Origem da Dengue</h1></div>
		<div class="inWorld" id="inWorld1" onClick="world('inWorld1','inBrazil1')"></div>
		<div class="inBrasil" id="inBrazil1" onClick="world('inBrazil1','inWorld1')"></div>
		<div class="advers origin" id="">
			<label id="dengOr">Clique em um dos dois locais acima para saber mais informações.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="redbasebg" onClick="showmenu('DengueOrigin','ZikaOrigin');" id="dengbutt" disabled>Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="ZikaOrigin">
		<div class="topbar yellowbasebg"><h1>Origem da Zika</h1></div>
		<div class="inWorld" id="inWorld2" onClick="world('inWorld2','inBrazil2')"></div>
		<div class="inBrasil" id="inBrazil2" onClick="world('inBrazil2','inWorld2')"></div>
		<div class="advers origin">
			<label id="zikaOr">Clique em um dos dois locais acima para saber mais informações.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="yellowbasebg" onClick="showmenu('ZikaOrigin','ChikOrigin');" id="zikabutt" disabled>Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="ChikOrigin">
		<div class="topbar greenbasebg"><h1>Origem da Chikungunya</h1></div>
		<div class="inWorld" id="inWorld3" onClick="world('inWorld3','inBrazil3')"></div>
		<div class="inBrasil" id="inBrazil3" onClick="world('inBrazil3','inWorld3')"></div>
		<div class="advers origin">
			<label id="chikOr">Clique em um dos dois locais acima para saber mais informações.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="greenbasebg" onClick="showmenu('ChikOrigin','doencaFinish');" id="chikbutt" disabled>Próximo</button>
  </div>
	</div>
	
	<!-- Sobre o Mosquito -->
	<div class="cont graybg none" id="AboutAedes">
		<div class="adverbg aedesbgabout" style="height:50%;">
			<div class="topbar graybasebg"><h1>Sobre o Mosquito</h1></div>
		</div>
		<div class="advers origin">
			<label><b>Nome científico:</b> <i>Aedes aegypti</i><br>
    				(Antigamente conhecido por <i>Culex aegypti</i>)<br>
					<b>Ordem:</b> Diptera<br>
					<b>Família: </b>Culicidae</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="greenbasebg" onClick="showmenu('AboutAedes','AedesOrigin');">Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="AedesOrigin">
		<div class="topbar bluebasebg"><h1>Origem do <i>Aedes</i></h1></div>
		<div class="inEgito" id="inWorld4" onClick="world('inWorld4','inBrazil4')"></div>
		<div class="inBrasil" id="inBrazil4" onClick="world('inBrazil4','inWorld4')"></div>
		<div class="advers origin">
			<label id="aedesOr">Clique em um dos dois locais acima para saber mais informações.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="bluebasebg" id="aedesbutt" onClick="showmenu('AedesOrigin','AedesCharacter');" disabled>Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="AedesCharacter">
		<div class="topbar yellowbasebg"><h1>Características do <i>Aedes</i></h1></div>
		
  <div class="adverbg" style="height:40%;"> 
    <div style="position:relative;width:100%;top:50%;transform:translateY(-57%);" align="center"> 
      <div style="width:270px;"> 
        <div class="charsicon" style="top:95px;left:40px;" id="char1" onClick="char('1')">1</div>
        <div class="charsicon" style="top:150px;left:150px;" id="char1" onClick="char('1')">1</div>
        <div class="charsicon" style="top:95px;left:65px;" id="char2" onClick="char('2')">2</div>
        <div class="charsicon" style="top:140px;left:-80px;" id="char3" onClick="char('3')">3</div>
        <div class="charsicon" style="top:85px;left:-70px;" id="char4" onClick="char('4')">4</div>
        <div class="charsicon" style="top:120px;left:-85px;" id="char5" onClick="char('5')">5</div>
        <img src="img/ainter/mobile/aedeschars.jpg" style="width:270px;height:auto;margin:0;max-width:270px;border-radius:5px;border:1px solid #DDD;"> 
      </div>
    </div>
  </div>
		<div class="advers origin" style="height:35%;">
			<label id="chartxt">Toque em um dos números acima para conhecer as caracteristicas do mosquito.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="yellowbasebg" onClick="showmenu('AedesCharacter','AedesHabits');" id="charbutt" disabled>Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="AedesHabits">
		<div class="topbar redbasebg"><h1>Hábitos do Mosquito</h1></div>
		<div class="adverbg redbgadd background" style="height:50%;">
			<div class="habimg" id="habimg1">
				<img src="img/ainter/project/sunicon.png" style="margin:10%;">
			</div>
			<div class="habimg" id="habimg2">
				<img src="img/ainter/project/fruits.png" style="margin:10%;">
			</div>
			<div class="habimg" id="habimg3">
				<img src="img/ainter/project/virusicon.png" style="margin:10%;">
			</div>
			<div class="habimg" id="habimg4">
				<img src="img/ainter/project/flyicon.png" style="margin:10%;">
			</div>
			<div class="topbar graybasebg" style="height:50px;">
				<div class="redbasebg habits" id="hab1" onClick="habit('1')"><h1>1</h1></div>
				<div class="redbasebg habits" id="hab2" onClick="habit('2')"><h1>2</h1></div>
				<div class="redbasebg habits" id="hab3" onClick="habit('3')"><h1>3</h1></div>
				<div class="redbasebg habits" id="hab4" onClick="habit('4')"><h1>4</h1></div>
			</div>
		</div>
		<div class="advers">
			<label id="habtstxt">Toque em um dos números acima para conhecer alguns dos hábitos do mosquito</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="redbasebg" id="habtbutt" onClick="showmenu('AedesHabits','AedesTimeline');" disabled>Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="AedesTimeline">
		<div class="topbar greenbasebg"><h1>Linha do Tempo</h1></div>
		<div class="adverbg greenbgadd background" style="height:55%;padding:2% 0;box-sizing: border-box;">
			<div class="years" id="year1" onClick="yr('year1')"><h2>1762</h2></div>
			<div class="years" id="year2" onClick="yr('year2')"><h2>1818</h2></div>
			<div class="years" id="year3" onClick="yr('year3')"><h2>1865</h2></div>
			<div class="years" id="year4" onClick="yr('year4')"><h2>1872</h2></div>
			<div class="years" id="year5" onClick="yr('year5')"><h2>1953</h2></div>
			<div class="years" id="year6" onClick="yr('year6')"><h2>1954</h2></div>
			<div class="years" id="year7" onClick="yr('year7')"><h2>1955</h2></div>
			<div class="years" id="year8" onClick="yr('year8')"><h2>1967</h2></div>
			<div class="years" id="year9" onClick="yr('year9')"><h2>2010</h2></div>
			<div class="years" id="year10" onClick="yr('year10')"><h2>2015</h2></div>
		</div>
		<div class="advers" style="height:20%;">
			<label id="yearstxt">Toque em uma data para saber mais informações sobre o ocorrido naquele ano.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="greenbasebg" id="yearbutt" onClick="showmenu('AedesTimeline','AedesBreeding');" disabled>Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="AedesBreeding">
		<div class="topbar bluebasebg"><h1>Ciclo de Vida</h1></div>
		<div class="adverbg bluebgadd background" style="height:55%;padding:2% 0;box-sizing: border-box;">
			<div class="years cicle" id="cicle1" onClick="crl('cicle1')"><h2>1</h2></div>
			<div class="years cicle" id="cicle2" onClick="crl('cicle2')"><h2>2</h2></div>
			<div class="years cicle" id="cicle3" onClick="crl('cicle3')"><h2>3</h2></div>
			<div class="years cicle" id="cicle4" onClick="crl('cicle4')"><h2>4</h2></div>
			<div class="years cicle" id="cicle5" onClick="crl('cicle5')"><h2>5</h2></div>
			<div class="years cicle" id="cicle6" onClick="crl('cicle6')"><h2>6</h2></div>
			<div class="years cicle" id="cicle7" onClick="crl('cicle7')"><h2>7</h2></div>
		</div>
		<div class="advers" style="height:20%;">
			<label id="crltxt">Toque nos números em ordem para saber o ciclo de vida do mosquito.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="bluebasebg" id="crlbutt" onClick="showmenu('AedesBreeding','aedesFinish');" disabled>Próximo</button>
  </div>
	</div>
	
	<!-- Os sintomas -->
	
	<div class="cont graybg none" id="Sintoma">
		<div class="topbar graybasebg" style="top:0;z-index:999"><h1>Sintomas</h1></div>
		<div class="adverbg background bluebgadd" style="height:50%;">
			<div style="position:absolute;bottom:0;width:100%" align="center">
				<div style="width:270px;">
					
        <div class="stmico" style="top:170px;left:-4px;" onClick="sintoma('febre')"></div>
					
        <div class="stmico" style="top:272px;left:-39px;" onClick="sintoma('dArticulares')"></div>
					
        <div class="stmico" style="top:204px;left:28px;" onClick="sintoma('mNpele')"></div>
					
        <div class="stmico" style="top:218px;left:44px;" onClick="sintoma('dMusculares')"></div>
					
        <div class="stmico" style="top:249px;left:52px;" onClick="sintoma('coceira')"></div>
					
        <div class="stmico" style="top:165px;left:-36px;" onClick="sintoma('iArticulares')"></div>
					
        <div class="stmico" style="top:90px;left:5px;" onClick="sintoma('dOlhos')"></div>
					
        <div class="stmico" style="top:63px;left:19px;" onClick="sintoma('dCabeca')"></div>
					
        <div class="stmico" style="top:75px;left:-5px;" onClick="sintoma('vomitos')"></div>
					<img src="img/ainter/project/Man3dBodyModel.png" style="width:270px;height:auto;margin:0;max-width:270px;">
				</div>
			</div>
		</div>
		<div class="advers" style="height:35%;">
			<label id="stmtxt">Toque em algum ponto para saber mais detalhes sobre um dos sintomas e em qual doença ele está mais presente.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="bluebasebg" id="stmbutt" onClick="showmenu('Sintoma','SintomaDuration');" disabled>Próximo</button>
  </div>
	</div>
	
	<div class="cont graybg none" id="SintomaDuration">
		<div class="topbar greenbasebg"><h1>Duração</h1></div>
		<div class="adverbg greenbgadd background" style="height:40%;">
			<div class="years dur" id="dur1" onClick="dur('dur1')" style="margin:0 2%"><h2>Dengue</h2></div>
			<div class="years dur" id="dur2" onClick="dur('dur2')"><h2>Zika</h2></div>
			<div class="years dur" id="dur3" onClick="dur('dur3')"><h2>Chikungunya</h2></div>
		</div>
		<div class="advers" style="height:35%;">
			<label id="durtxt">Escolha uma doença para saber em quantos dias, em média, os sintomas desaparecem.</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="greenbasebg" id="durbutt" onClick="showmenu('SintomaDuration','sintomasFinish');" disabled>Próximo</button>
  </div>
	</div>
	
	<!-- A precaução -->
	
	<div class="cont graybg none" id="Prevent">
		<div class="topbar redbasebg"><h1>Se prevenindo</h1></div>
		<div class="adverbg redbgadd background" style="height:40%;">
			<div class="habimg" id="previmg1">
				<img src="img/ainter/project/prev/1.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg2">
				<img src="img/ainter/project/prev/2.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg3">
				<img src="img/ainter/project/prev/3.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg4">
				<img src="img/ainter/project/prev/4.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg5">
				<img src="img/ainter/project/prev/5.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg6">
				<img src="img/ainter/project/prev/6.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg7">
				<img src="img/ainter/project/prev/7.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg8">
				<img src="img/ainter/project/prev/8.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg9">
				<img src="img/ainter/project/prev/9.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg10">
				<img src="img/ainter/project/prev/10.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg11">
				<img src="img/ainter/project/prev/11.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg12">
				<img src="img/ainter/project/prev/12.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg13">
				<img src="img/ainter/project/prev/13.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg14">
				<img src="img/ainter/project/prev/14.png" style="margin:10%;">
			</div>
			<div class="habimg" id="previmg15">
				<img src="img/ainter/project/prev/15.png" style="margin:10%;">
			</div>
		</div>
		<div class="advers" style="height:35%;">
			<label id="precatxt">Toque no botão abaixo para iniciar</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="redbasebg" id="prevbutt" onClick="prev();">Iniciar</button>
  </div>
	</div>
	
	<!-- Módulos Concluídos -->
	
	<div class="cont none" id="doencaFinish">
		<div class="background redbgadd adverbg">
			<img src="img/ainter/project/doencaicon.png">
		</div>
		<div class="advers">
			<label>O Problema:</label>
			<h1>As Doenças</h1>
			<br>
			<label class="labelsucess">Módulo Concluído com Sucesso!</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="redbasebg" onClick="showmenu('doencaFinish','mainmenu');finishModule('doencas');">Próximo</button>
  </div>
	</div>
	<div class="cont none" id="aedesFinish">
		<div class="background yellowbgadd adverbg">
			<img src="img/ainter/project/aedesicon.png">
		</div>
		<div class="advers">
			<label>O Causador:</label>
		    <h1>O <i>A. aegypti</i></h1>
			<br>
			<label class="labelsucess">Módulo Concluído com Sucesso!</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="yellowbasebg" onClick="showmenu('aedesFinish','mainmenu');finishModule('aedes');">Próximo</button>
  </div>
	</div>
	<div class="cont none" id="sintomasFinish">
		<div class="background greenbgadd adverbg">
			<img src="img/ainter/project/sintomasicon.png">
		</div>
		<div class="advers">
			<label>Identificando:</label>
		    <h1>Os Sintomas</h1>
			<br>
			<label class="labelsucess">Módulo Concluído com Sucesso!</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="greenbasebg" onClick="showmenu('sintomasFinish','mainmenu');finishModule('sintomas');">Próximo</button>
  </div>
	</div>
	<div class="cont none" id="precaFinish">
		<div class="background bluebgadd adverbg">
			<img src="img/ainter/project/precaicon.png">
		</div>
		<div class="advers">
			<label>Tomando</label>
		    <h1>As Precauções</h1>
			<br>
			<label class="labelsucess">Módulo Concluído com Sucesso!</label>
		</div>
		
  <div class="proxbuttondiv"> 
    <button class="bluebasebg" onClick="showmenu('precaFinish','mainmenu');finishModule('preca');">Próximo</button>
  </div>
	</div>
</body>
</html>
