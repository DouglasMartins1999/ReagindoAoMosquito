// JavaScript Document

var nVer = navigator.appVersion;
var nAgt = navigator.userAgent;
var browserName  = navigator.appName;
var fullVersion  = ''+parseFloat(navigator.appVersion); 
var majorVersion = parseInt(navigator.appVersion,10);
var nameOffset,verOffset,ix;

// In Opera 15+, the true version is after "OPR/" 
if ((verOffset=nAgt.indexOf("OPR/"))!=-1) {
 browserName = "Opera";
 fullVersion = nAgt.substring(verOffset+4);
}
// In older Opera, the true version is after "Opera" or after "Version"
else if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
 browserName = "Opera";
 fullVersion = nAgt.substring(verOffset+6);
 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
   fullVersion = nAgt.substring(verOffset+8);
}
// In MSIE, the true version is after "MSIE" in userAgent
else if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
 browserName = "Microsoft Internet Explorer";
 fullVersion = nAgt.substring(verOffset+5);
}
// In Chrome, the true version is after "Chrome" 
else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
 browserName = "Chrome";
 fullVersion = nAgt.substring(verOffset+7);
}
// In Safari, the true version is after "Safari" or after "Version" 
else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
 browserName = "Safari";
 fullVersion = nAgt.substring(verOffset+7);
 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
   fullVersion = nAgt.substring(verOffset+8);
}
// In Firefox, the true version is after "Firefox" 
else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
 browserName = "Firefox";
 fullVersion = nAgt.substring(verOffset+8);
}
// In most other browsers, "name/version" is at the end of userAgent 
else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < 
          (verOffset=nAgt.lastIndexOf('/')) ) 
{
 browserName = nAgt.substring(nameOffset,verOffset);
 fullVersion = nAgt.substring(verOffset+1);
 if (browserName.toLowerCase()==browserName.toUpperCase()) {
  browserName = navigator.appName;
 }
}
// trim the fullVersion string at semicolon/space if present
if ((ix=fullVersion.indexOf(";"))!=-1)
   fullVersion=fullVersion.substring(0,ix);
if ((ix=fullVersion.indexOf(" "))!=-1)
   fullVersion=fullVersion.substring(0,ix);

majorVersion = parseInt(''+fullVersion,10);
if (isNaN(majorVersion)) {
 fullVersion  = ''+parseFloat(navigator.appVersion); 
 majorVersion = parseInt(navigator.appVersion,10);
}

if(nAgt.indexOf("iPhone")!=-1) {
	document.getElementById("valid").innerHTML = "Infelizmente, esse serviço ainda não está disponível para iPhones. Desculpe-nos";
	document.getElementById("valid").style.color = '#C11';
	document.getElementById("subscribe").style.display = "none";
}
else {
	if(browserName == "Chrome"){
		if(majorVersion >= 42){
			document.getElementById("valid").innerHTML = "Seu navegador é compatível com o serviço";
			document.getElementById("valid").style.color = '#390';
		}
		else{
			document.getElementById("valid").innerHTML = "Você está com uma versão desatualizada do Google Chrome, por favor atualize para poder desfrutar desse serviço";
			document.getElementById("valid").style.color = '#C11';
			document.getElementById("subscribe").style.display = "none";
		}
	}
	else {
		if(browserName == "Firefox"){
			if(majorVersion >= 44){
				document.getElementById("valid").innerHTML = "Seu navegador é compatível com o serviço";
				document.getElementById("valid").style.color = '#390';
			}
			else{
				document.getElementById("valid").innerHTML = "Você está com uma versão desatualizada do Mozilla Firefox, por favor atualize para poder desfrutar desse serviço";
				document.getElementById("valid").style.color = '#C11';
				document.getElementById("subscribe").style.display = "none";
			}
		}
		else {
			document.getElementById("valid").innerHTML = "Seu navegador não é compatível com esse serviço. Por favor, instale a versão mais recente do Google Chrome ou do Mozilla Firefox.";
			document.getElementById("valid").style.color = '#C11';
			document.getElementById("subscribe").style.display = "none";
		}
	}
}