<?php
	class question{


		public static function status($user){
			$sql = Mysql::conectar()->prepare("SELECT * FROM `question` WHERE usuario = ? ORDER BY ID DESC LIMIT 1");
			$sql->execute(array($user));
			$status = $sql->fetch();

			if($sql->rowCount() == 0){
				echo '<form method="post">
					<div class="answer">
						<textarea name="texto"></textarea>
						<input type="submit" name="acao" value="Enviar">
					</div><!-- answer -->
					</form>';
			}else{
				if($status['status'] == 0){
				echo '<h2>Pergunta em analise.</h1>';
			}else{
				echo '<form method="post">
						<div class="answer">
							<textarea name="texto"></textarea>
							<input type="submit" name="acao" value="Enviar">
						</div><!-- answer -->
					</form>';
				}
			}
		}
		public static function messages($user){
			$sql = Mysql::conectar()->prepare("SELECT * FROM `question` WHERE usuario = ? ORDER BY ID ASC");
			$sql->execute(array($user));
			return $sql->fetchAll();
		}
	}