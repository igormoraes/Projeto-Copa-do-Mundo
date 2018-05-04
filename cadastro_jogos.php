<?php
	include "cabecalho.php";
	include "menu.php";
?>
<br />
	<label>Data do jogo: </label>
	<input type="date" name="data">
<br />
<br />

	<label>Time vs Time: </label>
	<select>
		<option>Brasil</option>
		<option>Servia</option>
		<option>Costa Rica</option>
		<option>Suiça</option>
	</select>
			VS
	<select>
		<option>Brasil</option>
		<option>Servia</option>
		<option>Costa Rica</option>
		<option>Suiça</option>
	</select>
<br />
<br />

	<label>Grupo: </label>
	<select>
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>
	</select>
<br />
<br />

	<input type="submit" value="Enviar"/>
	<input type="reset" value="Limpar"/>