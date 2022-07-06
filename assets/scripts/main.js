function dimiss(data,i){
	document.getElementById(data).style.display = 'none';
	if(i==1){
		document.getElementById('body').style.height = 'auto';
		document.getElementById('body').style.overflow = 'auto';
	}
}

function opem(data,i){
	document.getElementById(data).style.display = 'block';
	if(i==1){
		document.getElementById('body').style.height = '940px';
		document.getElementById('body').style.overflow = 'hidden';
	}
}

function goto(loc){
	window.location = loc;
}

function alertdata(){
	var id;
	var geturl=location.search.slice(1).split("&");
	
	for(var i=0;i<geturl.length;i++){
		var opt = geturl[i].split("=");
		if(opt[0]=="id"){
			id=opt[1];
			break;
		}
	}

	switch(id){
		case "1":
			alert("Esse email já foi registrado anteriormente");
			break;
		case "2":
			alert("As senhas não são iguais");
			break;
		case "3":
			alert("Olá! Você foi logado com sucesso!!");
			break;
		case "4":
			alert("Parabéns! Sua conta foi criada com sucesso!!");
			break;
		case "5":
			alert("O email inserido não foi registrado");
			break;
		case "6":
			alert("A senha inserida não está correta");
			break;
		case "7":
			alert("Parabéns! A partir de agora você passará a receber periodicamente mensagens sobre como combater o Aedes! Agradeçemos a atenção!");
			break;
		case "8":
			alert("Você precisa estar logado numa conta para acessar essa página. Ainda não possúi uma conta? Se inscreva agora mesmo!");
			break;
		case "9":
			alert("Sua mensagem foi enviada com sucesso! Agradecemos sua contribução com o Reagindo ao Mosquito");
			break;
		case "10":
			alert("Uma mensagem foi enviada ao email cadastrado com um link para que você possa alterar sua senha");
			break;
	}
}