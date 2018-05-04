<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Times</title>
	</head>
	<body>
		<div class="container">
			
			<?php
				include "cabecalho.php";
				include "funcoes.php";
				if(empty($_POST)){
					include "form_time.php";
				}else{
					ler_dados_times();
				}
			?>	
		</div>
	</body>
</html>
