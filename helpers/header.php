<div class="menuslide mobile" id="menu" style="display:none;" onClick="dimiss('menu',1)">
<img src="/assets/images/logo-small-light.png" align="middle" style="margin:0 auto;display:block;text-align:center;">
<hr class="h1slider" style="margin:20px 0px">
<div style="display:block;" id="nlog"><button class="button" style="width:100%;margin-bottom:20px;animation-name:null;opacity:1;" onClick="goto('/main/register.php');">Registrar-se</button><br><label style="font-size:12px;">Já tenho conta: <a href="/main/login.php?url=<?php echo $_SERVER['PHP_SELF'];?>" class="enter">Entrar</a></label></div>
<div style="display:none;" id="ylog"><h2 style="margin:0;">Olá, <?php echo $user;?>.</h2><h3 style="margin:0;">É bom ter você por aqui.</h3><label style="font-size:12px;"><a href="/services/logout.php" class="enter">Sair</a> - <a class="enter">Alterar Senha</a></label></div>
<hr class="h1slider" style="margin:30px 0px 5px">
<label style="margin-left:20px;"><a href="/main/content/articles.php?id=01"><b>Doenças</b></a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/content/articles.php?id=03">Quais são elas?</a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/content/articles.php?id=02">O <i>Aedes aegypti</i></a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/content/articles.php?id=04">Os Sintomas</a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/content/articles.php?id=05">A Prevenção</a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/content/articles.php?id=06">A Microcefalia</a></label>
<hr class="h1slider" style="margin-top:30px">
<label style="margin-left:20px;"><a href="/main/comunication.php"><b>Divulgação</b></a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/content/gallery.php">Galeria de Imagens</a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/subscribe.php">Notificar no Celular</a></label>
<hr class="h1slider" style="margin-top:30px">
<label style="margin-left:20px;"><a href="/main/entertainment.php"><b>Entretenimento</b></a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/interactive/interativa.php">Aprendizagem Interativa</a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/interactive/focosmap.php">Mapa de Focos</a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/interactive/120x12.php">Quiz/Jogo - 120 por 12</a></label>
<hr class="h1slider" style="margin-top:30px">
<label style="margin-left:20px;"><a href="/main/moreinfo.php"><b>Mais Informações</b></a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/trashreport.php">Denuncie Focos</a></label>
<hr class="h1slider">
<label class="submenu"><a href="https://www.facebook.com/reagindoaomosquito/" target="_blank">Página no Facebook</a></label>
<hr class="h1slider">
<label class="submenu"><a href="/main/contact.php">Fale Conosco</a></label>
<div style="height:60px;"></div>
</div>
<div id="body">
  <div class="header<?php if($_SERVER['PHP_SELF'] != '/index.php'){echo ' maxcl ';}?>"> 
    <div id="myModal" class="modal"> 
      <div class="modal-content" id="login"> <span class="close" onClick="closemodal();">&times;</span> 
        <p> 
        <h1>Faça Login</h1>
        <br>
        <form action="/helpers/process_login.php?url=<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="login_form" enctype="multipart/form-data" id="log" style="margin:0;">
          <input type="email" name="email" id="email" placeholder="Email"/>
          <br>
          <input type="password" name="password" id="password" placeholder="Senha"/>
          <br>
          <input type="button" value="Fazer Login" class="regbutton" onClick="verifylogin();"/>
        </form>
        <div class="foots" style="margin-top:10px;"> <label>Ainda não possui conta? 
          <label onClick="changemode('register','login');" style="color:#09C;cursor:pointer">Registrar-se 
          agora!</label></label>
          <br>
          Esqueceu a senha? <a href="/main/passwordrecover.php" class="enter">Recuperar Agora</a> </div></p>
        </div>
      <div class="modal-content" id="register"> <span class="close" onClick="closemodal();">&times;</span> 
        <p> 
        <h1>Registre-se!</h1>
        <br>
        <form action="/helpers/process_regist.php" method="post" name="login_form" enctype="multipart/form-data" id="reg" style="margin:0;">
          <input type="text" name="username" id="nome" placeholder="Nome"/>
          <br>
          <input type="email" name="email" id="mail" placeholder="Email"/>
          <br>
          <input type="password" name="pass1" id="senha1" placeholder="Senha"/>
          <br>
          <input type="password" name="pass2" id="senha2" placeholder="Confirme a senha"/>
          <br>
          <input type="button" value="Registrar Agora" class="regbutton" onClick="verifyregister();"/>
        </form>
        <div style="margin-top:10px;"> <label>Já possui conta? 
          <label onClick="changemode('login','register');" style="color:#09C;cursor:pointer">Entrar 
          agora!</label></label>
          </div></p>
        </div>
    </div>
    <div class="topbar pc minor"> <a href="/index.php"><img src="/assets/images/logo-small-light.png" style="float:left;"></a> 
      &nbsp; |&nbsp;&nbsp; <a href="/main/content/articles.php?id=01">Doenças</a> - <a href="/main/comunication.php">Divulgação</a> - <a href="/main/entertainment.php">Entreter</a> 
      - <a href="/main/moreinfo.php">+Info</a> <label style="float:right;position:relative;margin-right:10%;display:none;" id="nologed">| 
      <label id="myBtn" onClick="openmodal('login');">Login</label>
      - 
      <label id="myBtn" onClick="openmodal('register');">Registrar-se</label>
      |</label> 
      <div class="dropdown"> 
        <label style="float:right;position:relative;margin-right:10%;display:block;padding:0px 20px;" id="loged"><img src="http://dev.reagindoaomosquito.ml/img/userdefault.png" class="usericon"> 
        <?php echo $user;?>
        </label>
        <div class="dropdown-content"><a href="/main/passrecovery.php">Alterar Senha</a><a href="/services/logout.php">Sair</a></div>
      </div>
    </div>
    <div class="topbar mobile tablet"> <a href="/index.php"><img src="/assets/images/logo-small-light.png" style="float:left;"></a> 
      <div style="float:right;margin-right:10%;"> 
        <button class="openmenu" onClick="opem('menu');"><img src="/assets/images/sidebar.png"></button>
      </div>
    </div>
    <div class="header-title pc"> 
      <label>O Combate começa<br>
      se informando... </label>
      <br>
      <br>
      <a href="/main/entertainment.php" class="button">Começar Agora</a> </div>
    <div class="mobile headername"> 
      <h1>O Combate Começa se Informando</h1>
      <a href="/main/entertainment.php" class="button">Começar Agora</a></div>
  </div>