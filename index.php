<?php
    session_start();
	if(isset($_SESSION['username'])){
		$char = preg_split('/ /', $_SESSION['username'], -1);
		$user = ucwords($char[0]);
	}
?>
<html>
<head>
<title>Reagindo ao Mosquito - O combate começa se informando...</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require('assets/pages/header.htm');?>
<script type='text/javascript'>
$(window).load(function(){
$(document).ready(function() {
	$(window).scroll( function(){
    	$('#vector').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);    
            }
        });
		$('#top').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'left':'0','opacity':'1'},500);    
            }
        }); 
		$('#title').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'top':'0','opacity':'1'},500);    
            }
        }); 
		$('#button1').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'left':'0','opacity':'1'},500);    
            }
        }); 
		$('#button2').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'left':'0','opacity':'1'},500);    
            }
        }); 
		$('#paragh').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);    
            }
        });
		$('#button3').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'top':'0','opacity':'1'},500);    
            }
        });
		$('#title3').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'top':'0','opacity':'1'},500);    
            }
        });
		$('#paragh2').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},500);    
            }
        });
		$('#button4').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'top':'0','opacity':'1'},500);    
            }
        });
		$('#button5').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'left':'0','opacity':'1'},500);    
            }
        });
    });
});
});
</script>
<script type='text/javascript' src='/assets/scripts/main.js'></script>
</head>
<body onLoad="alertdata();modalsize();" onResize="modalsize();">
<?php include('helpers/header.php');?>
  <div class="content" align="center" id="begin"> 
    <h1 style="margin-top:0">Quem somos? O que fazemos?</h1>
    <hr>
    <p>Com o intuito de levar a informação sobre um tema importante através da 
      tecnologia, nós, alunos pesquisadores do Colégio Estadual de Malhada de 
      Pedras (Douglas Martins e Fábio Júnior), desenvolvemos o presente site com 
      informações sobre o <i>Aedes aegypti</i> e suas doenças para o público em 
      geral e, principalmente, destinado a jovens estudantes de Malhada de Pedras, 
      tendo como base a educação científica orientada pelo Programa Ciência na 
      Escola do Estado da Bahia, NRE-13, Caetite. Enquanto visitam nosso site, 
      vocês poderão encontrar informações relevantes sobre as doenças transmitidas 
      pelo <i>Aedes aegypti</i> e as formas de prevenção, tudo isso de forma fácil 
      e divertida de aprender. Aproveite!</p>
  </div>
  <div class="content" style="background:url('/assets/images/low-poly.jpg') no-repeat fixed center center / cover;color:#FFF;padding:5% 10%;"> 
    <div id="top" style="left:-50px;position:relative;opacity:0;"> <img src="/assets/images/vector.png" class="img-vector"> 
      <h1>A Informação</h1>
      <p>O Município de Malhada de Malhada de Pedras, com uma população estimada 
	  em 8.468 habitantes, vem registrando com frequência, casos de dengue e 
	  possíveis focos do mosquito <i>Aedes aegypti</i> e casos de zika e chikungunya. 
	  Manter-se informado diante de tal cenário é de suma importância para evitar 
	  que essas doenças se propaguem pelas residências, gerando novas vítimas e 
	  prejudicando a qualidade de vida da população. Um combate bem feito se 
	  inicia quando as pessoas se únem em favor de um propósito, e para esse 
	  propósito ser cumprido, é necessário se informar.</p>
    </div>
  </div>
<div class="content ai bg" style="background:url('/assets/images/bg/highlights.jpg');color:#FFF;" align="center"> 
  <h1 id="title3" style="top:-50px;position:relative;opacity:0;">Aprendizagem 
    Interativa</h1>
  <p id="paragh2" style="opacity:0;">Fique informado sobre o mosquito <i>Aedes 
    aegypti</i>, quais seus hábitos, as doenças transmitidas por ele, as formas 
    de prevenção e outras informações e curiosidades relevantes acerca do tema 
    de maneira divertida e prática. <br>
    Sabe como? Basta aproveitar de nossa Aprendizagem Interativa</p>
    <div id="button4" style="top:50px;position:relative;opacity:0;"><a href="/main/interactive/interativa.php" class="button">Começar 
      Agora</a></div>
</div>
<div class="content bg" style="background:url('/assets/images/bg/bgmap.png');background-repeat:no-repeat;background-size:cover;padding:5% 10% 8% 10%;"> 
  <div class="middlescreen"> 
    <h1 id="button2" style="left:-50px;position:relative;opacity:0;">Mapa Interativo</h1>
    <p id="paragh" style="opacity:0;">Quer saber a situação em que sua rua se 
      encontra acerca dos casos, suspeitas e focos do mosquito, sabia mais aqui!</p>
      <div id="button3" style="top:50px;position:relative;opacity:0;"><a href="/main/interactive/focosmap.php" class="button black">Acessar 
        Mapa</a><br>
        <br>
        <br>
      </div>
  </div>
  <div style="clear:both;"></div>
</div>
<div class="content divulgue" align="center"> 
  <div class="bar-divulgue"><img src="/assets/images/likebutton.png" style="top: -60px; position: relative;"></div>
  <h1 class="h1title" id="title"><br>
    Ajude a informar! Divulgue!</h1>
  <hr style="border:0.5px solid rgba(255, 255, 255, 0.25);">
  <p id="vector" style="opacity:0;">Quer ajudar nosso site se popularizar e fazer 
    com que mais pessoas tenham acesso a esse conteúdo? <br>
    Compartilhe nas redes sociais.</p>
    <div id="button5" style="left:-50px;position:relative;opacity:0;"><a href="/main/content/gallery.php" class="button">Acessar a Galeria</a></div>
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
<?php require('helpers/footer.php');?>
</body>
</html>
