<?php

//Tabela do Times

	$xml = simplexml_load_file("times.xml");
	?>
	
	<p>Times cadastrados</p>
	
	<table border="1">
	
		<thead>
		
			<tr>
				<td>Nome do Time</td>
				<td>Continente</td>
				<td>Grupo</td>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
				
					$time = $aux->nome;
					$cont = $aux->cont;
				echo"<tr>";
					echo "<td>$time</td>";
					echo "<td>$cont</td>";
					echo "<td>$grupo</td>";
				echo"</tr>";	
				}
				?>
			
		</tbody>
	</table>
<?php

// Tabela de Jogos
	
?>

<?php

	$xml = simplexml_load_file("jogos.xml");
	?>
	
	<p>Jogos cadastrados</p>
	
	<table border="1">
	
		<thead>
		
			<tr>
				<td>Data do Jogo</td>
				<td>Grupo</td>
				<td>Times</td>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$data = $aux->data;
					$grupo = $aux->grupo;
					
					echo "<tr>";
					
						echo "<td>$data</td>";
						echo "<td>$grupo</td>";
						echo "<td>$time</td>";
					
					echo "</tr>";
				}
				?>
		</tbody>
	</table>


<?php 

// Tabela de Grupos
?>

<?php

	$xml = simplexml_load_file("grupos.xml");
	?>
	
	<p>Cadastros de Grupos</p>
	
	<table border="1">
	
		<thead>
		
			<tr>
				<td>Grupos</td>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$grupo 	= $aux->grupo;
						
					echo "<tr>";
					
						echo "<td>$grupo</td>";
					
					echo "</tr>";
				}
				?>
		</tbody>
	</table>


