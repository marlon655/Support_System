<?php
	class answer{
			public static function abertos(){
				$sql = Mysql::conectar()->prepare("SELECT * FROM `question` WHERE status = 0");
				$sql->execute();
				return $sql->fetchAll();
			}

			public static function responder($user,$de){
				if (isset($_POST['acao'])) {
					$msg = $_POST['texto'];
					if($msg == '' || $msg == ' '){
						echo 'Não é permitido mensagens vazias!';
					}else{
					$sql = Mysql::conectar()->prepare("INSERT INTO `answer` (usuario,resposta,de) VALUES (?,?,?)");
					$sql->execute(array($user,$msg,$de));

					$sql = Mysql::conectar()->prepare("UPDATE `question` SET status = 1 WHERE usuario = ? ORDER BY ID DESC");
					$sql->execute(array($user));
					header('Location:'.INCLUDE_PATH);
					}
				}
			}

			public static function messages($user){
			$sql = Mysql::conectar()->prepare("SELECT * FROM `answer` WHERE usuario = ? ORDER BY ID ASC");
			$sql->execute(array($user));
			return $sql->fetchAll();
		}
	}