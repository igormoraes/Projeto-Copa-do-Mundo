<!DOCTYPE html>
<html>
	<head>
		<title>Pagina Inicial</title>
	</head>
	<body>
		<?php
			include "cabecalho.php";
			include "menu.php";
			
			if(file_exists("estados.xml") && ("cidades.xml") && ("estados.xml")){
				include "tabelas.php";
			}else{
				echo "Ainda não existem elementos cadastrados!";
			}
		?>
	</body>
</html>


