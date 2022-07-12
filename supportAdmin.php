<?php 
	if(isset($_GET['nome'])){
		$nome = $_GET['nome'];
	}else{
		$nome = '';
	}
	
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

		<div class="chamados">
			<h2>Chamados</h2>
			<div class="chamados-wraper">
			<ul>
				<?php
				$abertos = answer::abertos();
				foreach ($abertos as $key => $value) {
				?>
				<li><a href="<?php echo INCLUDE_PATH ?>?nome=<?php echo $value['usuario']?>"><?php echo $value['usuario'];?></a></li>
				<?php } ?>
			</ul>
		</div><!-- chamados-wraper -->
		</div><!-- chamados -->

		<div class="box">
			<h2>Suporte:</h2>
			<div class="roll">
				<?php
				$question = question::messages($nome);
				$answer = answer::messages($nome);

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
					<h2>Nome: Usuario</h2>
					<span>Phasellus sit amet tellus vel ex molestie finibus at sed magna.</span>
				</div>
				<div class="box-wraper">
					<h2>Nome: System Admin</h2>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id dictum sapien. Phasellus sit amet tellus vel ex molestie finibus at sed magna.</span>
				</div> -->
			</div><!-- roll -->
			<?php 
				if(isset($_GET['nome'])){
			?>
				<form method="post">
					<?php answer::responder($nome,$_SESSION['cargo']); ?>
					<div class="answer">
						<textarea name="texto"></textarea>
						<input type="submit" name="acao" value="Enviar">
					</div><!-- answer -->
				</form>
				<?php } ?>
		</div><!-- box -->
		<div class="clear"></div>
	</div><!-- center -->
</body>
</html>