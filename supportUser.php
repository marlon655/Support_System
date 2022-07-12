<?php 
	if(isset($_GET['loggout'])){
		session_destroy();
		header('Location:'.INCLUDE_PATH);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Support System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="center">
		<a href="<?php echo INCLUDE_PATH?>?loggout">Sair</a>
		<div class="clear"></div>
		<div class="box">
			<?php 
				if (isset($_POST['acao'])) {
					$msg = $_POST['texto'];
					if($msg == '' || $msg == ' '){
						echo 'Não é permitido mensagens vazias!';
					}else{
					$sql = Mysql::conectar()->prepare("INSERT INTO `question` (usuario,pergunta,status) VALUES (?,?,?)");
					$sql->execute(array($_SESSION['nome'],$msg,0));
					header('Location:'.INCLUDE_PATH);
					}
				}
			?>
			<h2>Suporte:</h2>
			<div class="roll">
				<?php
				$question = question::messages($_SESSION['nome']);
				$answer = answer::messages($_SESSION['nome']);
				for ($i = 0; $i < count($question) ; $i++) { 
					echo '<div class="box-wraper">
							<h2>Nome: '.$question[$i]['usuario'].'</h2>
							<span>Pergunta: '.$question[$i]['pergunta'].'</span>
							</div>';
					if(isset($answer[$i]['resposta'])){
					echo '<div class="box-wraper">
							<h2>Nome: '.$answer[$i]['de'].'</h2>
							<span>Resposta: '.$answer[$i]['resposta'].'</span>
							</div>';
						}
				}
				?>
<!-- 				<div class="box-wraper">
					<h2>Nome: System Admin</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id dictum sapien. Phasellus sit amet tellus vel ex molestie finibus at sed magna.</span>
				</div> -->
			</div><!-- roll -->
			<?php question::status($_SESSION['nome']);?>
		</div><!-- box -->
	</div><!-- center -->
</body>
</html>