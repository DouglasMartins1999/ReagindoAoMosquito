function formhash(form, password) {
    // Crie um novo elemento de input, o qual ser� o campo para a senha com hash. 
    var p = document.createElement("input");
 
    // Adicione um novo elemento ao nosso formul�rio. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Cuidado para n�o deixar que a senha em texto simples n�o seja enviada. 
    password.value = "";
 
    // Finalmente, envie o formul�rio. 
    form.submit();
}
 
function regformhash(form, uid, email, password, conf) {
     // Confira se cada campo tem um valor
    if (uid.value == ''         || 
          email.value == ''     || 
          password.value == ''  || 
          conf.value == '') {
 
        alert('You must provide all the requested details. Please try again');
        return false;
    }
 
    // Verifique o nome de usu�rio
 
    re = /^\w+$/; 
    if(!re.test(form.username.value)) { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        form.username.focus();
        return false; 
    }
 
    // Confira se a senha � comprida o suficiente (no m�nimo, 6 caracteres)
    // A verifica��o � duplicada abaixo, mas o cuidado extra � para dar mais 
    // orienta��es espec�ficas ao usu�rio
    if (password.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        return false;
    }
 
    // Pelo menos um n�mero, uma letra min�scula e outra mai�scula 
    // Pelo menos 6 caracteres 
 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
 
    // Verificar se a senha e a confirma��o s�o as mesmas
  if (password.value != conf.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        return false;
    }
 
    // Crie um novo elemento de input, o qual ser� o campo para a senha com hash. 
    var p = document.createElement("input");
 
    // Adicione o novo elemento ao nosso formul�rio. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Cuidado para n�o deixar que a senha em texto simples n�o seja enviada. 
    password.value = "";
    conf.value = "";
 
    // Finalizando, envie o formul�rio.  
    form.submit();
    return true;
}