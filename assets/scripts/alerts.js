	function alertdata(){
		var id = <?php echo json_encode($_GET["id"]);?>;
		switch(id){
			case "1":
				alert("Esse email já foi registrado anteriormente");
				break;
			case "2":
				alert("As senhas não são iguais");
				break;
			case "3":
				alert("Olá, <?php echo $user;?>! Você foi logado com sucesso!!");
				break;
			case "4":
				alert("Parabéns, <?php echo $user;?>! Sua conta foi criada com sucesso!!");
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
		}
	}