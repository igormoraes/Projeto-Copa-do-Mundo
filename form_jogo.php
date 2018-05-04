<article>
	<form action="cadastra_cidade.php" method="post">
		<fieldset>
			<legend>Cadastro de Jogos</legend>
			<p>
				<label>Data do Jogo:</label>
				<input type="date" name="data" size="30"/>
			</p>
			<p>
				<label>Grupo:</label>
				<select name="grupo">
					<?php
						selecionar_grupo();
					?>
				</select>
			</p>
			<p>
				<label>Time:</label>
				<select name="time">
					<?php
						selecionar_time();
					?>
				</select>
			</p>
			<input type="submit" value="Enviar"/>
		</fieldset>
	</form>
</article>