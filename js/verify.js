	// JavaScript Document
	
	function ValidateEmail(mail){
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    		return (true)
  		}
    	return (false)
		}
	function verifyregister(){
		//Campos
		var nome = document.getElementById("nome").value
		var email = document.getElementById("mail").value
		var pass1 = document.getElementById("senha1").value
		var pass2 = document.getElementById("senha2").value
		
		if(nome == "" || nome == null){
			alert("Por favor, insira seu nome");
		}
		else{
			if(email == "" || email == null){
				alert("Por favor, insira um email");
			}
			else {
				if(ValidateEmail(email) == false){
					alert("Por favor, insira um endereço de email válido");
				}
				else{
					if(pass1 == "" || pass1 == null){
						alert("Por favor, insira uma senha");
					}
					else {
						if(pass2 == "" || pass2 == null){
							alert("Por favor, confirme sua senha");
						}
						else {
							if(pass1 != pass2){
								alert("As senhas não são iguais");
							}
							else {
								document.getElementById("reg").submit();
							}
						}
					}
				}
			}
		}
	}

	function verifylogin(){
		//Campos
		var email = document.getElementById("email").value
		var pass1 = document.getElementById("password").value
		
			if(email == "" || email == null){
				alert("Por favor, insira um email");
			}
			else {
				if(ValidateEmail(email) == false){
					alert("Por favor, insira um endereço de email válido");
				}
				else{
					if(pass1 == "" || pass1 == null){
						alert("Por favor, insira uma senha");
					}
					else {
						document.getElementById("log").submit();
					}
				}
			}
	}