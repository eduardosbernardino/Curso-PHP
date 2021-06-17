<?php
	$nome = "Eduardo";
	$sobrenome = "Bernardino";
	$nomeCompleto = "$nome $sobrenome";
	echo "$nome <br>";
	echo "$sobrenome <br>";
	echo "$nomeCompleto <br>";
	var_dump($nome);
	//unset($nome);
	//testando o conteudo da variavel
	if (isset($nome)){
		echo "<br> $nome";
	}
?>