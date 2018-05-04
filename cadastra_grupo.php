<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Grupos</title>
	</head>
	<body>
		<div class="container">
			
			<?php
				include "funcoes.php";
				include "cabecalho.php";
				if(empty($_POST)){
					include "form_grupo.php";
				}else{
					ler_dados_grupos();
				}
			?>	
		</div>
	</body>
</html>
