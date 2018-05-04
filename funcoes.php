<?php	
	function ler_dados_times(){
		$time 		= $_POST["nome"];
		$cont 		= $_POST["cont"];
		$grupo		= $_POST["grupo"];
		
		if(!file_exists("times.xml")){

		$xml = 
"<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<times>
	<times>
		<nome>$time</nome>
		<continente>$cont</continente>
		<grupo>$grupo</grupo>
	</times>
</times>";
		

			file_put_contents("times.xml", $xml);
		
		}else{
			$xml=simplexml_load_file("times.xml");
			$time = $xml->addChild('time');
			$time->addChild('nome', $time);
			$time->addChild('cont', $cont);
			$time->addChild('grupo', $grupo);
			file_put_contents("times.xml", $xml->asXML());
		}
		echo "<article><br/><br/><div class=\"center\">
			<h2>Time cadastrado com sucesso.</h2></div></article>";
	}
	
	function ler_dados_jogos(){
		$data= $_POST["data"];
		$grupo= $_POST["time"];
		$time= $_POST["nome"];
		
		if(!file_exists("jogos.xml")){

		$xml = 
"<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<jogos>
	<jogos>
		<data>$data</data>
		<grupo>$grupo</grupo>
		<nome>$time</nome>
	</jogos>
</jogos>";
		

			file_put_contents("jogos.xml", $xml);
		
		}else{
			$xml=simplexml_load_file("jogos.xml");
			$jogo = $xml->addChild('jogo');
			$jogo->addChild('data', $data);
			$jogo->addChild('grupo', $grupo);
			$jogo->addChild('nome', $time);
			file_put_contents("jogos.xml", $xml->asXML());
		}
		echo "<article><br/><br/><div class=\"center\">
			<h2>Jogo cadastrado com sucesso.</h2></div></article>";
	}
	
	function ler_dados_grupos(){
		$grupo 		= $_POST["grupo"];
				
		if(!file_exists("grupos.xml")){

		$xml = 
"<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<grupos>
	<grupos>
		<grupo>$grupo</grupo>
	</grupos>
</grupos>";
		

			file_put_contents("grupos.xml", $xml);
		
		}else{
			$xml=simplexml_load_file("grupos.xml");
			$grupo = $xml->addChild('grupo');
			$grupo->addChild('gupo', $grupo);
			file_put_contents("grupos.xml", $xml->asXML());
		}
		echo "<article><br/><br/><div class=\"center\">
			<h2>Grupo cadastrado com sucesso.</h2></div></article>";
	}
	
	function selecionar_grupo(){
		
		if(file_exists("grupos.xml")) {
			
			$xml = simplexml_load_file ("grupos.xml");
			
			foreach ($xml -> children () as $grupo){
					
					echo"<option value='".$grupo->grupo."'> ".$grupo->grupo ."</option>";
					
				}
		}	
	}
	
	function selecionar_time(){
		
		if(file_exists("times.xml")) {
			
			$xml = simplexml_load_file ("times.xml");
			
			foreach ($xml -> children () as $grupo){
					
					echo"<option value='".$time->nome."'> ".$time->nome ."</option>";
					
				}
		}	
	}
	
	/*function selecionar_cidade_estado(){
		
		if(file_exists("cidades.xml")) {
			
			$xml = simplexml_load_file ("cidades.xml");
			
			foreach ($xml -> children () as $cidade){
					
					echo"<option value='".$cidade->cidade ."/".$cidade->estado ."'> ".$cidade->cidade ."/".$cidade->estado ."</option>";
					
				}
		}	
	}*/
	
?>