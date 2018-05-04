<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Jogos</title>
	</head>
	<body>
		<div class="container">
			
			<?php
				include "funcoes.php";
				include "cabecalho.php";
				if(empty($_POST)){
					include "form_jogo.php";
				}else{
					ler_dados_jogos();
				}
			?>	
		</div>
	</body>
</html>
