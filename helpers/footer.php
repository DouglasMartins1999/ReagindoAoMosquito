<script type="text/javascript" src="/assets/scripts/modal.js"></script>
<script>
		var session = <?php echo json_encode($_SESSION['login_string']);?>;
		if(session == null || session == false || session == ""){
			document.getElementById('nlog').style.display = 'block';
			document.getElementById('ylog').style.display = 'none';
		}
		else {
			document.getElementById('nlog').style.display = 'none';
			document.getElementById('ylog').style.display = 'block';
		}
	function modalsize(){
		var login = 334;
		var register = 408;
		var windowsize = window.innerHeight;
		var loginsize = windowsize/2 - login/2;
		var registersize = windowsize/2-register/2;
		document.getElementById('login').style.marginTop = loginsize;
		document.getElementById('register').style.marginTop = registersize;
	}
	function changemode(enter,exit){
		document.getElementById(enter).style.display = 'block';
		document.getElementById(exit).style.display = 'none';
	}
	var session = <?php echo json_encode($_SESSION['login_string']);?>;
	if(session == null || session == false || session == ""){
		document.getElementById('loged').style.display = 'none';
		document.getElementById('nologed').style.display = 'block';
	}
	else {
		document.getElementById('loged').style.display = 'block';
		document.getElementById('nologed').style.display = 'none';
	}
</script>
