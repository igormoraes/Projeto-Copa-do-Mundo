<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title> Pagina Inicial </title>
	</head>
	<body>
		<?php 
			include "cabecalho.php";
			
			if(file_exists("jogos.xml") && ("times.xml") && ("grupos.xml")){
				include "tabelas.php";
			}else{
				echo "Ainda não existem elementos cadastrados!";
			}
			
		?>
	</body>
</html>