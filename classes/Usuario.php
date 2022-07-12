<?php
	class Usuario{
		public function login($user,$pass){
			$sql = MySql::conectar()->prepare("SELECT * FROM `user` WHERE nome = ? AND senha = ?");
			$sql->execute(array($user,$pass));

			if($sql->rowCount() == 1){
				$usuario = $sql->fetch();
				$_SESSION['logado'] = true;
				$_SESSION['nome'] = $usuario['nome'];
				$_SESSION['cargo'] = $usuario['cargo'];
				$_SESSION['cargo_id'] = $usuario['cargo_id'];
				header('Location:'.INCLUDE_PATH);
			}else{
				echo '<h2>O Usuario não existe!</h2>';
			}
		}

		public static function logado(){
			return isset($_SESSION['logado']) ? true : false;
		}
	}