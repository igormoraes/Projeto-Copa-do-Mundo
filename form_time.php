<?php

	include"cabecalho.php";

?>
<article>
	<form action="cadastra_time.php" method="post">
		<fieldset>
			<legend>Cadastro de Times</legend>
			<p>
				<label>Time:</label>
				<input type="text" name="nome" size="30"/>
			</p>
			<p>
				<label>Continente:</label>
				<input type="text" name="cont"	size="30"/>
			</p>
			<p>
				<!--<label>Grupo:</label>
				<select name="grupo">
					<?php
						//selecionar_grupo();
					?>
				</select>-->
			</p>
			
			<input type="submit" value="Enviar"/>
		</fieldset>
	</form>
</article>