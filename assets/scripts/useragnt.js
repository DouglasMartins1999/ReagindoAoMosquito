// JavaScript Document
var user = navigator.userAgent;
var agent1 = "Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.9 (like Gecko) (Kubuntu)";
var agent2 = "Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.9.0.2) Gecko/2008091618 Firefox/3.0.2";
var agent3 = "Mozilla/5.0 (X11; Linux i686; rv:14.0) Gecko/20100101 Firefox/14.0.1";
var local = window.location.pathname;

if(user == agent1 || user == agent2 || user == agent3){
	switch(local){
		case '/index.php':
			window.location = '/main/simplified/index.htm';
			break;
		case '/main/interactive/interativa.php':
			window.location = '/main/simplified/a-interativa.htm';
			break;
		default:
			break;
	}
	
}

else {
	switch(local){
		case '/main/simplified/index.htm':
			window.location = '/index.php';
			break;
		case '/main/simplified/a-interativa.htm':
			window.location = '/main/interactive/interativa.php';
			break;
		default:
			break;
	}
}