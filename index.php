<?php include('config.php');

	if(Usuario::logado() == false){
		include('login.php');
	}else{
		switch ($_SESSION['cargo_id']) {
		case 1:
			include('supportUser.php');
			break;
		case 3:
			include('supportAdmin.php');
			break;
		default:
			echo 'Nada encontrado';
			break;
		}
	}